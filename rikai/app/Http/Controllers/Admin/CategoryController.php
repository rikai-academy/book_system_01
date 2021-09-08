<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\DB;
use App\Enums\PermissionType;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Notifications\CategoryNotification;
use Illuminate\Support\Facades\Notification;
use App\Enums\NotificationEnum;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.category.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.category.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        $role = Role::where('id','=',Auth::user()->roles()->value('role_id'))->first();
        $permissions = $role->permissions()->where('name','=',PermissionType::AddCategory)->first();
        $users = User::all();
        if($permissions){
            $data = $request->all();
            $category = Category::create($data);
            $action = NotificationEnum::AddCategory;
            Notification::send($users , new CategoryNotification($category->title,$action));
            if ($category){
                $message = 'message.add_category_success';
                return redirect()->route('category.index')->withMessage(__($message));
            } else {
                $message = 'message.add_category_fail';
                return redirect()->route('category.index')->withMessage(__($message));
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
    public function edit($categoryid)
    {
        //
        $category = $this->findCategory($categoryid);
        if($category){
            $categories = Category::where([['parent_id','=','0'],['id', '!=', $category->id]])->orderby('title', 'asc')->get();
            return view('admin.category.edit',compact('category','categories'));
        }else{
            $errors = 'message.no_category';
            return redirect()->route('homeadmin.index')->withErrors(__($errors));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $categoryid)
    {
        $role = Role::where('id','=',Auth::user()->roles()->value('role_id'))->first();
        $permissions = $role->permissions()->where('name','=',PermissionType::UpdateCategory)->first();

        if($permissions){
            $users = User::all();
            $category = $this->findCategory($categoryid);
            $data = $request->all();
            $category->update($data);
            $action = NotificationEnum::EditCategory;
            Notification::send($users , new CategoryNotification($category->title,$action));
            if($category){
                $message = 'message.update_category_success';
                return redirect()->route('category.edit',$category->id)->withMessage(__($message));
            } else {
                $message = 'message.update_category_fail';
                return redirect()->route('category.edit',$category->id)->withMessage(__($message));
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
    public function destroy($categoryid)
    {

        $role = Role::where('id','=',Auth::user()->roles()->value('role_id'))->first();
        $permissions = $role->permissions()->where('name','=',PermissionType::DeleteCategory)->first();

        if($permissions){
            $users = User::all();
            $category = $this->findCategory($categoryid);
            if(count($category->subcategory)){
                $subcategories = $category->subcategory;
                foreach($subcategories as $cat)
                {
                    DB::beginTransaction();
                    try{
                        $cat = DB::table('category')->where('id','=',$cat->id)->delete();
                        DB::commit();
                    }catch(Exception $e){
                        DB::rollBack();
                        throw new Exception($e->getMessage());
                    }
                }
            }
            $action = NotificationEnum::DeleteCategory;
            Notification::send($users , new CategoryNotification($category->title,$action));
            $category->delete();
            $message = 'message.delete_category_success';
            return redirect()->route('category.index')->withMessage(__($message));
        }else{
            $error = 'message.sufficient_permissions';
            return redirect()->route('bookadmin.index')->withErrors(__($error));
        }
    }

    public function findCategory($categoryid){
        $category = Category::find($categoryid);
        if($category){
            return $category;
        }else{
            $errors = 'message.no_category';
            return redirect()->route('homeadmin.index')->withErrors(__($errors));
        }
    }
}
