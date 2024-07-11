<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class WriterController extends Controller
{
   
    public function dashboard(){
        
        
        $unrevisionedArticles = Article::where("is_accepted", NULL)->get();
        $acceptedArticles = Article::where("is_accepted", true)->get();
        $rejectedArticles = Article::where("is_accepted", false)->get();

        return view('writer.dashboard',compact('unrevisionedArticles','acceptedArticles','rejectedArticles'));
    }
}
