<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Leaderboard;

class LeaderboardController extends Controller
{
    

    private $leaderboard;

    public function __contruct(Leaderboard $leaderboard) {
        $this->leaderboard = $leaderboard;
    }

    public function index() {
        return Leaderboard::all();
    }

    public function showLeaderboard(Leaderboard $id) {
        return $id;
    }

    public function addUserWin(Request $request) {
        $data = $request->all();
        dd($data);
        // return Leaderboard::create($data);
    }

    public function updateUserWin(Request $request) {

    }

    // public function insert(Request $request) {
    //     $name = $request->input('stud_name');
    //     DB::insert('insert into student (name) values(?)',[$name]);
    //     echo "Record inserted successfully.<br/>";
    //     echo '<a href = "/insert">Click Here</a> to go back.';
    //  }
}
