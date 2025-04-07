<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class handleUrls extends Controller
{
    function handleUrl($url){
        $entry = Url::where('url', '/test/' . $url)->first();
        if($entry && $entry->viewPath){
            return view($entry->viewPath);
        }else {
           return view('not_found');
        }
    }
}
