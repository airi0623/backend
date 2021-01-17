<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /** 
    * レシピ一覧を表示する
    *
    * @return view
    */ 
    public function top()
    {
        // $blogs = Blog::all();

        return view('recipe.top');
    }
}
