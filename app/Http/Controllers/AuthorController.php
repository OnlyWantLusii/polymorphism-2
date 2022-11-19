<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function index(User $author) {
        return view('posts', [
            'title' => "Post By Author : $author->name",
            'active' => 'posts',
            'posts' => $author->post->load('category', 'author'),
        ]);
    }
}
