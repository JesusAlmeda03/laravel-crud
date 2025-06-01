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

    public function show(){
        return "Listado de los mensajes";
    }
}
