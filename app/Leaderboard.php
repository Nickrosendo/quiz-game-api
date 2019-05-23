<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    protected $fillable = [
        'wins' 
    ];

    public $timestamps = false;
    
    /**
     * Get the user that owns the Leaderboard.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
