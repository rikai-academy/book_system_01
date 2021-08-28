<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\Book;
use App\Models\Book_Category;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["user"] = User::find($id);
        return view('users.profile.index')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $data["user"] = User::find($id);
        $data["user"]->update($request->all());
        return back()->with('data',$data)->with('profileChangeSuccess',__('message.profileChangeSuccess'));
    }

    public function favoriteBook($userId){

        $user = User::UserId($userId)->first();
        $activities = Activity::ActivityOfBooksUser()->get();
        if ($activities){
            $books = Book::BookActivityUser($user->id)->paginate(5);
            $count = $books->count();
            return view('users.profile.favorite',compact('user','books','count'));
        } else {
            $message = 'message.no_activity';
            return redirect()->route('index')->withMessage(__($message));
        }
    }

    public function rateBook($userId){
        $data["user"] = User::find($userId);
        return view('users.profile.rate')->with('data',$data);
    }

    public function timeLine($userId){
        return view('users.profile.timeline');
    }

    public function listuser(){
        $users = User::paginate(5);
        $count = $users->count();
        return view('users.profile.listuser',compact('users','count'));
    }
}
