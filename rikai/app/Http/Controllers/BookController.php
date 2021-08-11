<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use App\Models\Book_Category;
use App\Models\Category;
use App\Models\LikeReview;
use App\Models\User;
use App\Http\Requests\SearchFormRequest;
use App\Models\Activity;
use stdClass;
use App\Enums\FavoriteStatus;
use App\Enums\ReadStatus;
use App\Enums\ActivityType;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('users.book.list',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bookId)
    {
        //
        $book = Book::find($bookId);
        if($book){
            $book_id = $book->id;
            $category_book = Book_Category::where('book_id','=',$book_id)->get();
            foreach($category_book as $value){
                $category_id = $value->category_id;
                $categorys = Category::where('id','=',$category_id)->get();
            }
            $data["activity"] = new stdClass;
            $this->activityController($data["activity"],$book_id);
            $reviews = Review::where('book_id','=',$book_id)->paginate(2);
            return view('users.book.detail',compact('book','reviews','categorys'))->with('data', $data);

        }else{
            $errors = 'message.no_book';
            return view('/')->withErrors(__($errors));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cart($bookId)
    {
        return view('users.book.cart');
    }

    public function search(Request $request){
        $name = $request->body;
        $books = Book::where('title','like','%'.$name.'%')
        ->orWhere('author','like','%'.$name.'%')->paginate(10);
        $total = count($books);
        return view('users.book.search',compact('books','total'));
    }


    private function activityController($data_activity,$book_id){
        if (auth()->user()) {
            $activity = Activity::where('user_id', auth()->user()->id)->where('book_id', $book_id)->latest('id')->first();
            if ($activity) {
                $data_activity->read_status = $activity->read_status;
                $data_activity->favorite_status = $activity->favorite_status;
            } else {
                $data_activity->read_status = ReadStatus::NONE;
                $data_activity->favorite_status = FavoriteStatus::NONE;
            }
        } else {
            $data_activity->read_status = ReadStatus::NONE;
            $data_activity->favorite_status = FavoriteStatus::NONE;
        }
    }

    public function addreview($bookId){
        $book = Book::find($bookId);
        return view('users.review.create',compact('book'));
    }
}
