<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'UserController@login');
Route::get('user/{id}', 'UserController@getUser');
Route::post('register', 'UserController@register');
Route::get('leaderboard', 'UserController@show');
Route::post('leaderboard/{user}/update', 'UserController@saveUserWin');
// Route::get('leaderboards', 'LeaderboardController@index');
// Route::get('leaderboards/{id}', 'LeaderboardController@showLeaderboard');
// Route::post('leaderboards', 'LeaderboardController@addUserWin');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'UserController@details');
});

Route::get('/questions', function() {
    
    $WORLD_QUESTIONS = [
        array(
            "answers" => ["Tem entre 2 a 4 litros. São retirados 450 mililitros", "Tem entre 4 a 6 litros. São retirados 450 mililitros", "Tem 10 litros. São retirados 2 litros", "Tem 7 litros. São retirados 1,5 litros
            "],
            "category" => "World",
            "correct" => "Tem entre 4 a 6 litros. São retirados 450 mililitros",
            "question" => "Normalmente, quantos litros de sangue uma pessoa tem? Em média, quantos são retirados numa doação de sangue?"
        ),
        array(
            "answers" => ["Platão", "Galileu Galilei", "Descartes", "Sócrates"],
            "category" => "World",
            "correct" => "Descartes",
            "question" => "De quem é a famosa frase “Penso, logo existo”?"
        ),
        array(
            "answers" => ["França", "Inglaterra", "Brasil", "Austrália"],
            "category" => "World",
            "correct" => "Brasil",
            "question" => "De onde é a invenção do chuveiro elétrico?"
        ),
        array(
            "answers" => ["Vaticano e Rússia", "Nauru e China", "Mônaco e Canadá", "Malta e Estados Unidos"],
            "category" => "World",
            "correct" => "Vaticano e Rússia",
            "question" => "Quais o menor e o maior país do mundo?"
        ),
        array(
            "answers" => ["Jânio Quadros", "Jacinto Anjos", "Getúlio Vargas", "João Goulart"],
            "category" => "World",
            "correct" => "João Goulart",
            "question" => "Qual o nome do presidente do Brasil que ficou conhecido como Jango?"
        ),
        array(
            "answers" => ["O Senhor dos Anéis", "Dom Quixote", "O Pequeno Príncipe", "Ela, a Feiticeira"],
            "category" => "World",
            "correct" => "Dom Quixote",
            "question" => "Qual o livro mais vendido no mundo a seguir à Bíblia?"
        ),
        array(
            "answers" => ["Japão e Serra Leoa", "Austrália e Afeganistão", "Itália e Chade", "Estados Unidos e Angola"],
            "category" => "World",
            "correct" => "Japão e Serra Leoa",
            "question" => "Quais os países que têm a maior e a menor expectativa de vida do mundo?"
        ),
        array(
            "answers" => ["12 minutos", "1 dia", "12 horas", "8 minutos"],
            "category" => "World",
            "correct" => "8 minutos",
            "question" => "Quanto tempo a luz do Sol demora para chegar à Terra?"
        ),

    ];

    $COMPUTERS_QUESTIONS = [
        array(
            "answers" => ["HyperText Master Language", "HardText Markup Language", "HyperTable Max Language", "HyperText Markup Language"],
            "category" => "Computers",
            "correct" => "HyperText Markup Language",
            "question" => "O que significa HTML?"
        ),
        array(
            "answers" => ["<html>", "<head>", "<!DOCTYPE html>", "<title>"],
            "category" => "Computers",
            "correct" => "<html>",
            "question" => "Qual a primeira tag que um documento HTML deve conter?"
        )
    ];

    // $SPORT_QUESTIONS = [
    //     array("")
    // ];

    // $CINEMA_QUESTIONS = [
    //     array("")
    // ];

    // $GAMES_QUESTIONS = [
    //     array("")
    // ];

    $content = array_merge(
        $COMPUTERS_QUESTIONS,
        $WORLD_QUESTIONS
    );
        
    return response()->json($content);
});
