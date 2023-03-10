<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categorys', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name,
            'gambar' => $category->gambar,
            'quote' => $category->quotes,
            'kuis' => $category->quiz
        ]);
    }
}
