@extends('layouts.app')
@section('content')


<div class="col-md-6">
       <div class="card">

        <img src="{{$player->photo ? $player->photo->file: 'no player photo'}}" alt="Avatar" style="width:100%">
        <div class="container">
            <h4><b>{{$player->name}}</b></h4>
            <p> Power: {{$player->power}} <br> Cost: {{$player->cost_money}}</p>
        </div>
    </div>

</div>
    <div class="col-md-6"><H2><b>Bio:</b></H2>{{$player->bio}}</div>



























    @stop