<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Role;
use App\Models\User;
use App\Models\Book_category;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Tag;
use App\Notifications\BookNotification;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\BookRequest;
use App\Library\Services\Contracts\UploadimageServiceInterface; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Permission;
use App\Enums\PermissionType;
use App\Enums\NotificationEnum;

class BookController extends Controller
{

    protected $uploadImageService;

    public function __construct(UploadImageServiceInterface $uploadImageServiceInterface)
    {
        $this->uploadImageService = $uploadImageServiceInterface;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('admin.book.list',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorys = Category::where('parent_id','=','0')->get();
        return view('admin.book.add',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $role = Role::where('id','=',Auth::user()->roles()->value('role_id'))->first();
        $permissions = $role->permissions()->where('name','=',PermissionType::AddBook)->first();

        if($permissions){
            $users = User::all();
            $data = $request->all();
            $type= 'book';
            $data['image'] = $this->uploadImageService->uploadImage($request,$data,$type);
            $tags = explode(',',$request->tag);
            $book = Book::create($data);
            $book->tag($tags);
            $categorys = $request->input('category_id');
            foreach($categorys as $category){
                DB::beginTransaction();
                try{
                    $bookcategory = DB::table('book_category')->insert([
                        'book_id' => $book->id,
                        'category_id' => $category,
                    ]);
                    DB::commit();
                } catch(Exception $e) {
                    DB::rollBack();
                    throw new Exception($e->getMessage());
                }

            }
            $action = NotificationEnum::AddBook;
            Notification::send($users , new BookNotification($book->title,$action));
            if ($book){
                $message = 'message.add_book_success';
                return redirect()->route('bookadmin.index')->withMessage(__($message));
            } else {
                $message = 'message.add_book_fail';
                return redirect()->route('bookadmin.index')->withMessage(__($message));
            } 
        }else{
            $error = 'message.sufficient_permissions';
            return redirect()->route('bookadmin.index')->withErrors(__($error));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bookid)
    {
        //
        $book = $this->findBook($bookid);
        $category = Category::all();
        return view('admin.book.edit',compact('book','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $bookid)
    {

        $role = Role::where('id','=',Auth::user()->roles()->value('role_id'))->first();
        $permissions = $role->permissions()->where('name','=',PermissionType::UpdateBook)->first();

        if($permissions){
            $users = User::all();
            $book = $this->findBook($bookid);
            $data = $request->all();
            $categorybooks = Book_Category::where('book_id','=',$bookid)->get();
            $categorys = $request->input('category_id');
            $categoryvalue=[];
            foreach($categorybooks as $categorybook){
                $categoryvalue[] = $categorybook['category_id'];
            }
            foreach($categorys as $category){
                if(!in_array($category,$categoryvalue)){
                    DB::beginTransaction();
                    try{
                        $bookcategory = DB::table('book_category')->insert([
                            'book_id' => $book->id,
                            'category_id' => $category,
                        ]);
                        DB::commit();
                    } catch(Exception $e){
                        DB::rollBack();
                        throw new Exception($e->getMessage());
                    }
                }
            }
            foreach($categoryvalue as $value){
                if(!in_array($value,$categorys)){
                    DB::beginTransaction();
                    try{
                        $bookcategory = DB::table('book_category')->where([
                            ['book_id' ,'=', $bookid],
                            ['category_id', '=', $value]
                        ])->delete();
                        DB::commit();
                    } catch(Exception $e){
                        DB::rollBack();
                        throw new Exception($e->getMessage());
                    }
                }
            }

            $type = 'book';
            $data['image'] = $this->uploadImageService->uploadImage($request,$data,$type);
            $tags = explode(',',$request->tag);
            $book->update($data);
            $book->retag($tags);
            $action = NotificationEnum::EditBook;
            Notification::send($users , new BookNotification($book->title,$action));
            if($book){
                $message = 'message.update_book_success';
                return redirect()->route('bookadmin.edit',[$book->id])->withMessage(__($message));
            } else {
                $message = 'message.update_book_fail';
                return redirect()->route('bookadmin.edit',[$book->id])->withMessage(__($message));
            }
        }else{
            $error = 'message.sufficient_permissions';
            return redirect()->route('bookadmin.index')->withErrors(__($error));

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bookid)
    {

        $role = Role::where('id','=',Auth::user()->roles()->value('role_id'))->first();
        $permissions = $role->permissions()->where('name','=',PermissionType::DeleteBook)->first();

        if($permissions){
            $users = User::all();
            $book = $this->findBook($bookid);
            $categories = Book_Category::where('book_id','=',$bookid)->get();
            $action = NotificationEnum::DeleteBook;
            Notification::send($users , new BookNotification($book->title,$action));
            $book->delete();
            foreach($categories as $category){
                DB::beginTransaction();
                try{
                    $bookcategory = DB::table('book_category')->where([
                        ['book_id' ,'=', $bookid],
                        ['category_id', '=', $category->category_id]
                    ])->delete();
                    DB::commit();
                } catch(Exception $e){
                    DB::rollBack();
                    throw new Exception($e->getMessage());
                }
            }
            $message = 'message.delete_book_success';
            return redirect()->route('bookadmin.index')->withMessage(__($message));
        }else{
            $error = 'message.sufficient_permissions';
            return redirect()->route('bookadmin.index')->withErrors(__($error));
        }

    }

    public function findBook($bookid){
        $book = Book::find($bookid);
        if($book){
            return $book;
        }else{
            $errors = 'message.no_book';
            return redirect()->route('homeadmin.index')->withErrors(__($errors));
        }
    }
}
