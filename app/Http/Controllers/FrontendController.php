<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layout;
use App\Models\Widget;
use App\Models\LayoutWidget;
use Illuminate\Support\Arr;
use App\Models\Category;
use App\Models\Post;
use App\Models\District; 

class FrontendController extends Controller                      
{
    public function index()
    {

        // $url  = __DIR__ .'../../../../resources/views/layouts/layout-one/grid.php';

    //    $structure = file_get_contents($url);



        $view = 'layouts.'.getLayoutPath().'.main';
        $LayoutWidgets = LayoutWidget::where('layout_id' , getActiveLayout()->id)->get();
        $widgets = Widget::get();
        $widgetsIndexed = $layoutWidgetsIndexed = [];

        foreach ($widgets as $w) {
            $widgetsIndexed[$w->id] = $w; 
        }

        foreach ($LayoutWidgets as $key => $value) {
         $layoutWidgetsIndexed[$value->widget_space_id] = $value;
        }

        if (view()->exists($view)) {
            return view($view,[
                'lw' => $layoutWidgetsIndexed,
                'wi' => $widgetsIndexed,

            ]);
        }
        return "not found";
    }

    public function categoryWiseNews($slug){

        $cat = Category::getId($slug)->first();
        $post_id = $cat->posts()->take(5)->get()->pluck('id');
        $pagi_post = $cat->posts()->whereNotIn('posts.id',$post_id)->paginate(10);   

        $cat_info = Category::getId($slug)->first();
        return view('layouts.voice-tv.category',[
            'cat_posts' =>  $cat->posts,
            'cat_info'  => $cat_info,
            'pagi_posts' => $pagi_post
        ]);
    }
    
    public function details($post_slug){
        
        $slug = rawurlencode($post_slug);
        $data = Post::search($slug , $type = 'single');
        $cat = $data->getCat()->first();
      
        if($cat){
            $cat_posts = Category::getId($cat->slug)
                    ->first()
                    ->posts()
                    ->latest()
                    ->paginate(5); 
        } else {
            $cat_posts = null;
         }
                   
        return view('layouts.voice-tv.post',[
           'post' =>  $data,
           'cat_info' => $cat ? $cat : null,
           'cat_posts' =>  $cat_posts,
           'latest_posts' => Post::latestPost()
        ]);
    }

    public function archive(){
       $archives =  Post::paginate(15);
       return view('layouts.voice-tv.archive',compact('archives'));
    }

    public function dateWisePost(Request $request){
        $archives = Post::date($request);
        return view('layouts.voice-tv.archive',compact('archives'));
    }

    public function district($slug){
        $district = District::district($slug);
        $posts =  $district->posts()->paginate(2);
        $latest_posts = Post::take('5')->get();
        return view('layouts.voice-tv.district',compact('posts','latest_posts'));
    }
    public function privacy()
    {
        return view('layouts.voice-tv.privacy');
    }
    public function cookie()
    {
        return view('layouts.voice-tv.cookie');
    }
}
