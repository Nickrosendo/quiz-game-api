<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions', ['middleware' => 'cors' , function() {
    
    $content = [
        array(
            "answers" => ["a", "b", "c", "d"],
            "category" => "Sport",
            "correct" => "a",
            "question" => "Qual é a primeira letra do alfabeto?"
        ),
        array(
            "answers" => ["a", "b", "c", "d"],
            "category" => "World",
            "correct" => "b",
            "question" => "Qual é a segunda letra do alfabeto?"
        ),array(
            "answers" => ["a", "b", "c", "d"],
            "category" => "Cinema",
            "correct" => "c",
            "question" => "Qual é a terceira letra do alfabeto?"
        ),array(
            "answers" => ["a", "b", "c", "d"],
            "category" => "Games",
            "correct" => "d",
            "question" => "Qual é a quarta letra do alfabeto?"
        ),array(
            "answers" => ["a", "b", "c", "e"],
            "category" => "Computers",
            "correct" => "e",
            "question" => "Qual é a quinta letra do alfabeto?"
        )
    ];
        
    return response()->json($content);
}]);