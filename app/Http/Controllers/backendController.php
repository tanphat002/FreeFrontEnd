<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(){
        return view('backend.dashboard');
    }
    
    public function listArticles(){
        return view('backend.articles.index');
    }

    public function detailArticles(){
        return view('backend.article.index');
    }
    
    public function createArticles(){
        return view('backend.article.index');
    }

    public function updateArticles(){
        return view('backend.article.index');
    }

    public function deleteArticles(){
        return view('backend.article.index');
    }
}
