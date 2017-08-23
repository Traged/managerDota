@extends('layouts.app')
@section('content')


    <div class="card">
        <img src="{{$team->photo ? $team->photo->file: 'no team photo'}}" alt="Avatar" style="width:80%">
        <div class="container">
            <h4><b>{{$team->name}}</b></h4>
            <p> <table>
              <tr> <th>Role</th><th>Name</th><th>Photo</th>  <th>Power</th></tr>
                <tr><th>Carry</th><th><a href="{{route('show.player', $carry->id)}}">{{$carry->name}}</a></th><th><img height="50" src="{{$carry->photo ? $carry->photo->file: 'no photo'}}" alt=""><th>{{$carry->power}}</th></tr>
                <tr><th>Mid</th><th><a href="{{route('show.player', $mid->id)}}">{{$mid->name}}</a></th><th><img height="50" src="{{$mid->photo ? $mid->photo->file: 'no photo'}}" alt=""><th>{{$mid->power}}</th></tr>
                <tr><th>Offlane</th><th><a href="{{route('show.player', $offlane->id)}}">{{$offlane->name}}</a></th><th><img height="50" src="{{$offlane->photo ? $offlane->photo->file: 'no photo'}}" alt=""><th>{{$offlane->power}}</th></tr>
                <tr><th>Position 4</th><th><a href="{{route('show.player', $pos4->id)}}">{{$pos4->name}}</a></th><th><img height="50" src="{{$pos4->photo ? $pos4->photo->file: 'no photo'}}" alt=""><th>{{$pos4->power}}</th></tr>
                <tr><th>Position 5</th><th><a href="{{route('show.player', $pos5->id)}}">{{$pos5->name}}</a></th><th><img height="50" src="{{$pos5->photo ? $pos5->photo->file: 'no photo'}}" alt=""><th>{{$pos5->power}}</th></tr>

            </table></p>
        </div>

    </div>
    <a href="{{route('match.teams', $team->id)}}"><button type="button">Scrim</button></a>
    <a href="{{route('scrim.teams', $team->id)}}"><button type="button">Match</button></a>


















    @stop