<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);


//Controlador para los posts
Route::get('/post',         [PostController::class, 'index']);
Route::get('/post/create',  [PostController::class, 'create']);   
Route::get('/post/show',    [PostController::class, 'show']);   


// Route::get('/mensaje/{post}/{catgory?}', function($post, $category = null){
//     if($category){
//         for
//         $resultado = $category * 10;
//         return $resultado;
//     }else{
//         return "No tiene valor";
//     } 
//});
