<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
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

    public function follow($userId, $followId){
        $follow = Follow::FollowUser($userId, $followId)->first();
        if($follow){
            $message = 'message.now_follow';
            return redirect('listuser')->withMessage(__($message));
        }else{
            $data["follow"] = new Follow;
            $data["follow"]->user_id = $userId;
            $data["follow"]->follow_id = $followId;
            $data["follow"]->save();
            $message = 'message.follow_success';

            return redirect()->route('listuser')->withMessage(__($message));
        } 
    }

    public function unfollow($userId, $followId){
        $follow = Follow::FollowUser($userId, $followId)->first();
        if($follow){
            $follow->delete();
            $message = 'message.unfollow_success';
            return redirect()->route('listuser')->withMessage(__($message));
        }else{
            $message = 'message.no_follow';
            return redirect()->route('listuser')->withMessage(__($message));

        } 
    }
}
