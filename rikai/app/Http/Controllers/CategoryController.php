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
        // $categoryList = [$categoryid];
        // dd($category->children->count()>0?'1':'2');
        // if ($category->children->count()>0) {
        //     foreach ($category->children as $key => $value) {
        //         # code...
        //     }
        // }
        $books = $category->books()->paginate(10);
        // $category = Category::find($categoryid);
        // $books = $category->books()->get();
        // dd($books);
        return view('users.book.list',compact('books'));
    }
}
