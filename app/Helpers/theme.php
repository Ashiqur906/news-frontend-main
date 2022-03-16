<?php

use App\Models\Category;
use App\Models\Layout;
use App\Models\Widget;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostDistrict;
use App\Models\District;
use App\Models\Setting;

if (!function_exists('getWidget')) {
    function getWidget()
    {
        $result = [];
        $data = Widget::get();
        foreach ($data as $list) {
            $result[$list->widget_slug] = $list;
        }

        return $result;
    }
}
if (!function_exists('getCategories')) {
    function getCategories()
    {
        $result = [];
        $data = Category::get();

        return $data;
    }
}
if (!function_exists('getCategory')) {
    function getCategory($id)
    {
         $post = Post::where('id',$id)->first();
         $cat_id = $post->getCat()->first();
         return ($cat_id)?$cat_id->slug :null;

    }
}


if (!function_exists('getLayoutPath')) {
    function getLayoutPath()
    {
        $layout = getActiveLayout();
        $layout_path = isset($layout->path) ? $layout->path : 'layout-default';

        return $layout_path;
    }
}

if (!function_exists('getActiveLayout')) {
    function getActiveLayout()
    {
        return Layout::whereStatus(1)->first();

    }
}

if (!function_exists('getWidgetRender')) {
    function getWidgetRender($layout_widgets,$wid , $widgetsIndexed)
    {
        if(!empty($layout_widgets[$wid])){
            $path = 'layouts.'.getActiveLayout()->path.'.widgets.'.$widgetsIndexed[$layout_widgets[$wid]->widget_id]->path;
            if(View::exists($path)){
                return view($path,compact('layout_widgets','wid' , 'widgetsIndexed'));
            }

            return view('widgets.'.$widgetsIndexed[$layout_widgets[$wid]->widget_id]->path,compact('layout_widgets','wid' , 'widgetsIndexed'));
        }
    }
}

if(!function_exists('getActiveCategory')) {
    function getActiveCategory()
    {
        return cache()->remember('get-active-category', 60 * 5, function () {
            return Category::where('isMenu' , 1)->get();
        });
    }
}

if(!function_exists('getheadline')) {
    function getheadline()
    {
        return cache()->remember('get-headline', 60 * 1, function () {
            return Post::latest()->take(15)->get();
        });
    }
}


if(!function_exists('getRequestedValue')) {
    function getRequestedValue($setting)
    {
        if($setting->taxonomy != 'html'){
            if($setting->taxonomy == 'post') {
                if(!empty($setting->data)){
                return  Post::whereIn('id' , $setting->data)->where('status', 1)->get();
                }
            } elseif ($setting->taxonomy == 'tag') {
                if(!empty($setting->data)){
                $tag = Tag::Search($setting->data);
                return $tag->posts()->orderBy('id' , 'desc')->take($setting->data_limit)->get();
                }
            } elseif ($setting->taxonomy == 'category') {
                if(!empty($setting->data)){
                    $cat = Category::Search($setting->data);
                    return $cat->posts()->orderBy('id' , 'desc')->take($setting->data_limit)->get();
                }
            } elseif ($setting->taxonomy == 'video') {
                if(!empty($setting->data)){
                    return Post::whereIn('id' , $setting->data)->where('status',1)->get();
                }
            }
        } else {
            return $setting->data;
        }
    }
}

if(!function_exists('widgetSetting')){
    function widgetSetting($global)
    {
        $ws = json_decode($global);
        return $results = $ws;
    }
}
if(!function_exists('etb_property')){
    function etb_property($date){
        $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
        $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার'
        );
        $convertedDATE = str_replace($engDATE, $bangDATE, $date);
        return $convertedDATE;
    }
}

if(!function_exists('etb')){
    function etb($date){
        $request_date = date('F d , Y',strtotime($date));
        return etb_property($request_date);
    }
}

if(!function_exists('current_etb')){
    function current_etb(){
        $currentDate = date('l, j F, Y');
        return etb_property($currentDate );
    }
}

if(!function_exists('getDistrict')){
    function getDistrict(){
        $district_ids = PostDistrict::districtId();
        $districts =  District::districts($district_ids);
        return $districts;
    }
}
if(!function_exists('getSocial')){
    function getSocial(){
        $socials = Setting::get();
        return $socials;
    }
}

if(!function_exists('getPolitics')){
    function getPolitics($cat){
        if($cat == 'রাজনীতি'){
           $politics = Category::where('slug' , 'রাজনীতি')->orWhere('title' , $cat)->pluck('slug')->first();
           return $politics;

        } elseif($cat == 'বিশ্ব'){
           $world = Category::where('slug' , 'বিশ্ব')->orWhere('title' , $cat)->pluck('slug')->first();
           return $world;
        } elseif($cat == 'খেলাধুলা'){
            $sports = Category::where('slug' , 'খেলাধুলা')->orWhere('title' , $cat)->pluck('slug')->first();
            return $sports;
        }


    }
}

