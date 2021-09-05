<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::where('parent_id',0)->get();
        Session::put('language','vi');
        $books = Book::all();
        $slides = Book::take(6)->get();
        $users = User::take(6)->get();
        $categorys = Category::take(3)->get();
        return view('users.home',compact('books','slides','users','categorys'));
    }

}
