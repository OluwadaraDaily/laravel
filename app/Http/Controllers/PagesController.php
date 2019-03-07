<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Homepage of The Predictor Application';
    	return view('pages.index')->with('title', $title);
    }

    public function about(){
    	$title = "The About Us Page of The Predictor Application";
    	return view('pages.about')->with('title', $title);
    }

    public function services(){
    	$title = "The Services Page of The Predictor Application";
    	return view('pages.services')->with('title', $title);
    }
}
