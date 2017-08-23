<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Player;
use Illuminate\Http\Request;

class AdminPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players= Player::all();
        return view('admin.player.index', compact( 'players') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.player.create');
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

        if($file = $request->file('photo_id')){

//        $file = $request->file('photo_id');

            $name = time() .".". $file->getClientOriginalName();



            $file->move('images', $name);

            $photo = Photo::create(['file'=> $name]);

            $input ['photo_id'] = $photo-> id;

        }

        $input['password'] = bcrypt($request -> password);
        Player::create($input);





        return redirect('admin/players');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::findOrFail($id);


        return view('admin.player.edit', compact('player'));
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
        $input= $request->all();

        $player = Player::findOrFail($id);




        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input ['photo_id'] = $photo->id;
    }
        $player->update($input);
        return redirect('/admin/players');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player =  Player::findOrFail($id);
        unlink(public_path() . $player ->photo->file);
        $player -> delete();

        session()->flash('deleted_user', 'Player has been fucking killed');
        return redirect('/admin/players');
    }
}
