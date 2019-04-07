<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){

        // My custom condition added
        // if(Auth::guest()){
        //     $title = 'Welcome to FirstBlog by Jalpesh!!';
        // }else{
        //     $title = 'Welcome '.auth()->user()->name ;
        // }
        // if(auth()->user()->id){
        //     $title = 'Welcome '.auth()->user()->name ;
        // }else{
        //     $title = 'Welcome to FirstBlog by Jalpesh!!';
        // }
        // $user_id = auth()->user()->id;
        // echo $user_id;
        $title = 'Welcome to FirstBlog by Jalpesh!!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
             'title'=> 'Services',
             'services' => ['Web Development', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
