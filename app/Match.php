<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [

        'team_1',
        '1_player1_id',
        '1_player2_id',
        '1_player4_id',
        '1_player3_id',
        '1_player5_id',
        'team_2',
        '2_player1_id',
        '2_player2_id',
        '2_player3_id',
        '2_player4_id',
        '2_player5_id',
        'winner_number',
        'battle_log'

    ];

    public function randomwin(){
        $id = rand(1,2);
        $counter = 'count'.$id;
        return $counter;
    }

    public function earlygame($team_1, $team_2){
       $support1_1  = Player::findOrFail($team_1->player4_id);
       $support1_2  = Player::findOrFail($team_1->player5_id);
       $power1 = $support1_1->power;
        $power2 = $support1_2->power;
       $support1 = $power1 + $power2;
        $support2_1  = Player::findOrFail($team_2->player4_id);
        $support2_2  = Player::findOrFail($team_2->player5_id);
        $power3 = $support2_1->power;
        $power4 = $support2_2->power;
        $support2 = $power3 + $power4;
        return [$support1, $support2];

    }

    public function lategame($team_1, $team_2, $supp ){
        $offlane_1  = Player::findOrFail($team_1->player3_id);
        $mid_1      = Player::findOrFail($team_1->player2_id);
        $carry_1    = Player::findOrFail($team_1->player1_id);

        $offlane_2  = Player::findOrFail($team_2->player3_id);
        $mid_2      = Player::findOrFail($team_2->player2_id);
        $carry_2    = Player::findOrFail($team_2->player1_id);

        $offlane_1 = $offlane_1->power;
        $mid_1     = $mid_1->power;
        $carry_1   = $carry_1->power;
        $offlane_2 = $offlane_2->power;
        $mid_2     = $mid_2->power;
        $carry_2   = $carry_2->power;

        $late1 = $offlane_1+$mid_1+$carry_1;
        $late2 = $offlane_2+$mid_2+$carry_2;

        if($supp[0]>$supp[1]){
            $late1 = $late1*1.2;
            $late2 = $late2*0.8;
            return [$late1, $late2];}
        elseif ($supp[0]<$supp[1]){
            $late1 = $late1*0.8;
            $late2 = $late2*1.2;
            return [$late1, $late2];}
        elseif ($supp[0]==$supp[1]);
        return [$late1, $late2];

    }
    public function match($team_id, $enemy_id){
        $team_1= Team::findOrFail($team_id);
        $team_2= Team::findOrFail($enemy_id);

        $supp = Match::earlygame($team_1, $team_2);
        $late = Match::lategame($team_1, $team_2, $supp);
        $power1 = $supp[0]+$late[0];
        $power2 = $supp[1]+$late[1];
        $count1=0;
        $count2=0;
        if($power1>$power2)
            $count1= 1;
        elseif ($power2>$power1)
            $count2= 1;
        elseif ($power1==$power2){
            $split = Match::randomwin();
            $$split = 1;
        }
        $scrim1 = $team_1->scrim_score;
        $scrim2 = $team_2->scrim_score;
        if($scrim1>$scrim2)
            $count1= $count1 +1;
        elseif ($scrim1<$scrim2)
            $count2=  $count2 +1;
        elseif ($scrim1==$scrim2){
            $split = Match::randomwin();
            $$split++;
        }
        $spirit1 = $team_1->spirit_score;
        $spirit2 = $team_2->spirit_score;
        if($spirit1>$spirit2)
            $count1= $count1 +1;
        elseif ($spirit1<$spirit2)
            $count2=  $count2 +1;
        elseif ($spirit1==$spirit2){
            $split = Match::randomwin();
            $$split++;
        }
        $winner=0;
        if($count1>$count2)
            $winner=$team_1->id;
        elseif ($count1<$count2)
            $winner= $team_2->id;
        elseif ($count1==$count2){
            dd($e='split');}
        //FIX THE SPLIT LATER bcs cant happen, but should no be possible to happen write now

        return [$team_1,$team_2, $winner];
    }

    public function fblog($team_id, $enemy_id){
        $team_1= Team::findOrFail($team_id);
        $team_2= Team::findOrFail($enemy_id);
        //FIRSTBLOOD
        $id = rand(1,2);
        $player = rand(1,5);
        $team = 'team_'.$id;
        $player = 'player'.$player.'_id';
        $name=  Player::findOrFail($$team->$player);
        $min= rand(0,4);
        $sec= rand(0,59);
        $time= $min.':'.$sec;
        $log = 'It lasted until '.$time.' till '.$name->name.' from team '.$$team->name.' gave up first blood.';
        return $log;
    }

    public function fragslog($team_id, $enemy_id){
        $team_1= Team::findOrFail($team_id);
        $team_2= Team::findOrFail($enemy_id);

//        $log1= $player.' got picked of by '.$player2;

        $fragnumber = rand(9,60);
        $message= [
            ' picked of ',
            ' won teamfight by killing ',
            ' saved the day by taking life from ',
            ' baited ouf beautifull kill on ',
            ' Jebaited ',
            ' just in second he killed ',
            ' after painfull chase he finaly took life from']; // 7 posibilities
        $log= 'After first blood: ';
        $min=5;
        $sec=0;
        $kills1=0;
        $kills2=0;
        $time=0;

        for ($i=1; $i<$fragnumber; $i++){
            $id = rand(1,2);
            $player = rand(1,5);
            $team = 'team_'.$id;
            $player1 = 'player'.$player.'_id';

            //not getting killed by teammates
            if($id==1){
                $kills1++;
                $id2=2;}
            else{
                $kills2++;
                $id2=1;}
            $team2 = 'team_'.$id2;
            $player2 = rand(1,5);
            $player2 = 'player'.$player2.'_id';

            //generating time
            $min= $min+ rand(1,3);
            $sec= rand(0,59);
            if($sec<10)
                $sec= '0'.$sec;

            $log1= Player::findOrFail($$team->$player1)->name.$message[rand(0,6)].Player::findOrFail($$team2->$player2)->name;
            $log= $log.' '.'<br>At: '.$min.':'.$sec.' '.$log1;
            if($i==($fragnumber-1))
                $time=$min.':'.$sec;
        }
        $score = $kills1.':'.$kills2;
        return [$score, $log, $time];
    }

    public function create_winner($result, $log){
        $match= Match::create();
        $match['winner_number']=$result[2];
        $match['battle_log']=$log;
        $match['team_1']=$result[0]->id;
        $match['team_2']=$result[1]->id;

        //with for  can be 4 line less
        for($i=1;$i<6; $i++){
            $player1 ='1_player'.$i.'_id';
            $player='player'.$i.'_id';
            $match[$player1]=$result[0]->$player;
        }
        for($i=1;$i<6; $i++){
            $player1 ='2_player'.$i.'_id';
            $player='player'.$i.'_id';
            $match[$player1]=$result[1]->$player;
        }
        $match->update();
        return $match;
    }


    public function photo(){

        return $this -> hasMany('App\Photo');
    }


}
