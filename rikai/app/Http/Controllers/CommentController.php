<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Book;
use App\Models\User;
use App\Models\Comment;
use App\Http\Requests\CommentFormRequest;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(CommentFormRequest $request)
    {
        //
        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        $data['review_id'] = $request->reviewid;
        $comment = Comment::create($data);
        if ($comment){
            $message = 'message.add_comment_success';
            return redirect('review/'.$request->reviewid)->withMessage(__($message));
        } else {
            $message = 'message.add_comment_fail';
            return redirect('review/'.$request->reviewid)->withMessage(__($message));  
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
    public function edit($commentid)
    {
        //
        $comment = Comment::find($commentid);
        if ($comment && $this->hascomment($comment)==true){
            return view('users.comment.edit',compact('comment'));
        } else {
            $errors = 'message.sufficient_permissions';
            return redirect('review/'.$comment->review_id)->withErrors(__($errors));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentFormRequest $request, $commentid)
    {
        //
        $comment = Comment::find($commentid);
        if ($comment && $this->hascomment($comment)==true){
            $data = $request->all();
            $comment->update($data);
            if($comment){
                $message = 'message.update_comment_success';
                return redirect('review/'.$comment->review_id)->withMessage(__($message));
            } else {
                $message = 'message.update_comment_fail';
                return redirect('review/'.$comment->review_id)->withMessage(__($message));
            }
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
    public function destroy($commentId)
    {
        //
        $comment = Comment::find($commentId);
        if ($comment && $this->hascomment($comment)==true ){
            $comment->delete();
            $message = 'message.delete_review_success';
            return back()->withMessage(__($message));
        } else {
            $errors = 'message.sufficient_permissions';
            return redirect('/')->withErrors(__($errors));
        }
    }

    public function hascomment(Comment $comment){
        $result = false;
        if ($comment->user_id == Auth::user()->id || Auth::user()->role=='admin'){
            $result = true;
        }
        return $result;
    }
}
