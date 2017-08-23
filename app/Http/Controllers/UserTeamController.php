<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Player;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $that= $user->team_id;
//        dd($that);
        if($that ){}else
            return view('user/team/new_team');
        $team = Team::findOrFail($user)->first();

//        $nameofteam = Team::findOrFail($user)->first();

//        for($i=1;$i<=5;$i++){
//        if($team->${'player' .$i.'_id'})
//        ${'player' .$i} = Player::findOrFail($id =$team->${'player' .$i.'_id'});
//        else
//            ${'player' .$i.'_id'}= 0;
//            }


        if($team->player1_id)
            $player1 = Player::findOrFail($id =$team->player1_id);
        else
              $player1=0;
        if($team->player2_id)
        $player2 = Player::findOrFail($id =$team->player2_id);
        else
            $player2=0;
        if($team->player3_id)
        $player3 = Player::findOrFail($id =$team->player3_id);
        else
            $player3=0;
        if($team->player4_id)
        $player4 = Player::findOrFail($id =$team->player4_id);
        else
            $player4=0;
        if($team->player5_id)
        $player5 = Player::findOrFail($id =$team->player5_id);
        else
            $player5=0;

//    dd($);
        return view('user.team.index', compact('user', 'team', 'player1', 'player2', 'player3', 'player4', 'player5') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $team=  Team::create($input);


        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);



            $team ['photo_id'] = $photo->id;

        }
        $team->update();

        $user = Auth::user();
        $user ['team_id'] = $team->id;
        $user->update();






        return redirect('/user/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $team = Team::findOrFail($id);
          $carry = Player::findOrFail($team->player1_id);
        $mid = Player::findOrFail($team->player2_id);
        $offlane = Player::findOrFail($team->player3_id);
        $pos4 = Player::findOrFail($team->player4_id);
        $pos5 = Player::findOrFail($team->player5_id);


        return view('user.team', compact('team', 'carry', 'mid', 'offlane', 'pos4', 'pos5'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add_player( $team, $position)
    {
        $user = Auth::user();
        $players = Player::all();
        $team = Team::findOrFail($team);
//        dd($team);

        return view('user.team.players', compact( 'player', 'players', 'team', 'position', 'user' ));

    }

    public function insert_player(Request $request){

      $input = $request->all();
      $user = Auth::user();
      $team = Team::findOrFail($user->team_id);
      // cheking if players are unicate
        $i=1;
        $future = $input['future'];
        while($i<=5){
            $position= 'player'.$i.'_id';
            $now= $team->$position;
            if($now==$future)
                return redirect()->route('team.index');
            $i++;
        }
        //
      $team->update($input);
      $value = (($user->game_money)-($input['cost']));
      $user ['game_money']=$value;
      $user->update();

        return redirect()->route('team.index');

    }
    public function kick_player(Request $request){
        $team= Team::findOrFail($request->team);
        $i=1;
        while($i<=($request->position)){
            $position= 'player'.$i.'_id';
            $i++;
        }
        $team->$position=0;
        $team->update();
        return redirect()->route('team.index');

    }

    public function show_teams(){
        $teams= Team::all();
        return view('user/team/team_list', compact('teams', 'team'));
    }
    public function show_player($id)
    {
        $player = Player::findOrFail($id);


        return view('user.player ', compact('player'));

    }
    public function show_players()
    {
        $players = Player::all();
        return view('user.playerslist', compact('player', 'players'));

    }

}
