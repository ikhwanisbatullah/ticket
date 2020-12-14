<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('Public/home');
    }

    public function article(){
        return view('Public/article');
    }
    public function faq(){
        return view('Public/faq');
    }

    public function career(){
        return view('Public/career');
    }

    public function contact(){
        return view('Public/contact');
    }

    public function privacypolicy(){
        return view('Public/privacy-policy');
    }

    public function productsservices(){
        return view('Public/products-services');
    }

    public function aboutus(){
        return view('Public/about-us');
    }
}
