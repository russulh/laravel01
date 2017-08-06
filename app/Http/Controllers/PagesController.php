<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
      return view('pages.home');
    }

    public function getVideos($id = 0, $name = null)
    {
      if(empty($id) || empty($name)){
         return view('empty');
      }   
      // return "$id - $name";
      return view('pages.videos', compact('id','name'));
    }
}
