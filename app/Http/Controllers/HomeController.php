<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function getHome(){
    	return view('pages.home');
    }

    public function getProject(){
    	return view('pages.project');
    }

    public function getContact(){
    	return view('pages.contact');
    }

    public function getAboutMe(){
    	return view('pages.aboutme');
    }
}
