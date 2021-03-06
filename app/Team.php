<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [

        'name',
        'photo_id',
        'rank',
        'player1_id',
        'player2_id',
        'player3_id',
        'player4_id',
        'player5_id',
        'spirit_score',
        'scrim_score'


    ];
    public function allplayers($team){
        for($i=1; $i<6; $i++){
            $player= 'player'.$i.'_id';
            if($team->$player==0)
                return false;
        }
        return true;
    }

    public function user(){

        return $this -> belongsTo('App\User');
    }

    public function photo(){

        return $this ->belongsTo('App\Photo');
    }

    public function player(){

        return $this ->hasMany('App\Player');
    }


}
