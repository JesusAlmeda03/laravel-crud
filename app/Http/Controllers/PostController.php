<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Index del post";
    }

    public function create(){
        return "Formulario para crear un post";
    }

    public function show($post){

        return view('posts.show',compact('post'));
    }
}
