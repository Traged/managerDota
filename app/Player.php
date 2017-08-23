<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [

        'name','photo_id','power','cost_money','bio','sub_only'

    ];

    public function photo(){

        return $this ->belongsTo('App\Photo');
    }
}
