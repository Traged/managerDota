<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Match;
use Illuminate\Support\Facades\Auth;

class MatchmakingController extends Controller
{


    public function runmatch($id)
    {
        $team_id= Auth::user()->team_id;
        $newMatch = new Match;
        $team = $newMatch->match($team_id, $id);
        $Log = $newMatch->fblog($team_id, $id);
        $newLog = $newMatch->fragslog($team_id, $id);
        $log= $Log.'  '.$newLog[1];

        if($team[2]==$team[0]->id){
            $team[0]->spirit_score= $team[0]->spirit_score+20;
            $team[1]->spirit_score= $team[1]->spirit_score/2;
        }
        else{
            $team[1]->spirit_score= $team[1]->spirit_score+20;
            $team[0]->spirit_score= $team[0]->spirit_score/2;
        }
        $team[0]->update();
        $team[1]->update();

        $match = $newMatch->create_winner($team, $log);


        $winner ='Winner '. Team::findOrFail($team[2])->name;
        $score = $newLog[0];

        $time= $newLog[2];


        return view('user.match', compact( 'match'));
    }
    public function scrim($id)
    {
        $team_id= Auth::user()->team_id;
        $newMatch = new Match;
        $team = $newMatch->match($team_id, $id);
        $Log = $newMatch->fblog($team_id, $id);
        $newLog = $newMatch->fragslog($team_id, $id);
        $log= $Log.'  '.$newLog[1];
        $team[0]->scrim_score++;
        $team[1]->scrim_score++;
        $team[0]->update();
        $team[1]->update();
        $winner ='Winner '. Team::findOrFail($team[2])->name;
        $score = $newLog[0];
        $time= $newLog[2];
        return view('user.scrim', compact( 'winner', 'log', 'score', 'time'));
    }

    public function allmatches(){
        $matches= Match::all();
        $teams= Team::all();
        return view('user.matches', compact('matches', 'match', 'teams', 'team'));

    }

    public function showmatch($id){


    }
}
