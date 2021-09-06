<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryid)
    {
        //
        $category = Category::find($categoryid);
        $books = $category->books()->paginate(10);
        return view('users.book.list',compact('books'));
    }
}
