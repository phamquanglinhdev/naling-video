<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($slug=""){
        if($slug==""){
            return view("errors.404");
        }
        $category =Category::where("slug","=",$slug)->first();
        return view("client.movies",["category"=>$category]);
    }
}
