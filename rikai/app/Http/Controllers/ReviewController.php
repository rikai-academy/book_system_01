<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Book;
use App\Http\Requests\ReviewFormRequest;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.review.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewFormRequest $request)
    {
        //
        $data = $request->all();
        $data['book_id'] = $request->bookid;
        $data['user_id'] = $request->user()->id;
        $review = Review::create($data);
        $message = 'message.add_review_success';
        return redirect('book/'.$review->book_id)->withMessage(__($message));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reviewId)
    {
        //
        return view('users.review.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $reviewId)
    {
        //
        $review = Review::find($reviewId);
        $book_id = $review->book_id;
        $book = Book::find($book_id);
        if ($review && 
        ($request->user()->id == $review->user_id ||
         $request->user()->role=='admin')){
            return view('users.review.edit',compact('review','book'));
        } else {
            $errors = 'message.sufficient_permissions';
            return redirect('/')->withErrors(__($errors));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewFormRequest $request, $reviewId)
    {
        //
        $review = Review::find($reviewId);
        $review->book_id = $request->bookId;

        if ($review &&
         ($review->user_id == Auth::user()->id ||
          Auth::user()->role=='admin')){
            $rate = $request->rate;
            $data = $request->all();
        if ($rate != null){
            $data['rate'] = $rate;
        } else {
            $data['rate'] = $review->rate;
        }
            $message = 'message.update_review_success';
            $review->update($data);
            return redirect('book/'.$review->book_id)->withMessage(__($message));
        } else {
            $errors = 'message.sufficient_permissions';
            return redirect('/')->withErrors(__($errors));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$reviewId)
    {
        //
        $review = Review::find($reviewId);
        if ($review && 
        ($review->user_id == Auth::user()->id ||
         Auth::user()->role=='admin')){
            $review->delete();
            $message = 'message.delete_review_success';
            return redirect('book/'.$review->book_id)->withMessage(__($message));
        } else {
            $errors = 'message.sufficient_permissions';
            return redirect('/')->withErrors(__($errors));
        }
    }
}
