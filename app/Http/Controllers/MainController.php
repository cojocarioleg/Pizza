<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('main')->with([
            'categories'=> Category::orderBy('id','desc')->withTranslations()->take(7)->get(),
            'abouts'=> About::orderBy('id','desc')->withTranslations()->take(1)->get(),
        ]);
    }
    
}
