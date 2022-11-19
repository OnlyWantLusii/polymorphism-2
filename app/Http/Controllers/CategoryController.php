<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    
    public function index() {
        return view('categories', [
            'title' => 'Post categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }

    public function index_slug(Category $category) {
        return view('posts', [
            'title' => "Post By Category : $category->name",
            'active' => 'categories',
            'posts' => $category->posts->load('category', 'author'),
        ]);
    }

}
