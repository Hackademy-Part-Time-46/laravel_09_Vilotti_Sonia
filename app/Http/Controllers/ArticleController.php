<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('index', ['articles' => $articles]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        Article::create($request->all());
        return view('store');
    }
    public function show()
    {
        return view('show');
    }
}
