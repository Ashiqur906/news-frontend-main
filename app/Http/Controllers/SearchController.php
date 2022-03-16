<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function index(Request $request){
        if($request->search != ''){
            $posts = Post::query()
                    ->whereLike(['title','short_description','description'], $request->search)->get();
            return view('layouts.voice-tv.search',[
                'posts' => $posts
            ]);
        } else {
          return redirect()->back();
        }
       
    }
}
