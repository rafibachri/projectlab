<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category1($id){
        $category = Category::findOrFail($id);

        return view('category',compact('category'));
    }
}
