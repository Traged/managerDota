@extends('layouts.app')
@section('content')


<h1>

Team: <a href="{{route('team.show', $team->id)}}">{{$team->name}} </a>     <img height="100" src="{{$team->photo ? $team->photo->file: 'no team photo'}}" alt="Team">
</h1>

{{--<div class="chip">--}}
    {{--<img src="{{$team->photo ? $team->photo->file: 'no team photo'}}" alt="Team" width="96" height="96">--}}
    {{--something--}}
{{--</div>--}}
<table>
<tr><th>Role</th><th>Name</th> <th>Photo</th><th>Bio</th><th>Power</th><th>Cost</th><th>sub</th></tr>

@if($player1)
<tr>
    <td>Your carry:</td>
    <td><a href="{{route('show.player', $player1->id)}}">{{$player1->name}}</a></td>
    <td><img height="50" src="{{$player1->photo ? $player1->photo->file: 'no user photo'}}" alt=""></td>
    <td>{{$player1->bio}}</td>
    <td>{{$player1->power}}</td>
    <td>{{$player1->cost_money}}</td>
    <td>{{$player1->sub_only}}</td>
    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>1 ])}}"> Kick your carry! <br></a></tr>
@else
    <a href="{{route('add.player',['team'=>$team->id, 'position'=>1 ])}}"> Get carry <br></a>

@endif
@if($player2)
    <tr>
    <td>Your mid:</td>
    <td><a href="{{route('show.player', $player2->id)}}">{{$player2->name}}</a></td>
    <td><img height="50" src="{{$player2->photo ? $player2->photo->file: 'no user photo'}}" alt=""></td>
    <td>{{$player2->bio}}</td>
    <td>{{$player2->power}}</td>
    <td>{{$player2->cost_money}}</td>
    <td>{{$player2->sub_only}}</td>
    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>2 ])}}"> Kick your mid! <br></a></tr>
@else
    <a href="{{route('add.player',['team'=>$team->id, 'position'=>2 ])}}"> Get mid <br></a>
@endif

@if($player3)
    <tr>
    <td>Your offlane:</td>
    <td><a href="{{route('show.player', $player3->id)}}">{{$player3->name}}</a></td>
    <td><img height="50" src="{{$player3->photo ? $player3->photo->file: 'no user photo'}}" alt=""></td>
    <td>{{$player3->bio}}</td>
    <td>{{$player3->power}}</td>
    <td>{{$player3->cost_money}}</td>
    <td>{{$player3->sub_only}}</td>
    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>3 ])}}"> Kick your offlane! <br></a></tr>
@else
    <a href="{{route('add.player',['team'=>$team->id, 'position'=>3 ])}}"> Get offlane <br></a>
@endif
@if($player4)
    <tr>
    <td>Your pos4 support:</td>
    <td><a href="{{route('show.player', $player4->id)}}">{{$player4->name}}</a></td>
    <td><img height="50" src="{{$player4->photo ? $player4->photo->file: 'no user photo'}}" alt=""></td>
    <td>{{$player4->bio}}</td>
    <td>{{$player4->power}}</td>
    <td>{{$player4->cost_money}}</td>
    <td>{{$player4->sub_only}}</td>
    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>4 ])}}"> Kick your pos4 support! <br></a></tr>
@else
            <a href="{{route('add.player',['team'=>$team->id, 'position'=>4 ])}}">Get pos4 support <br></a>
@endif
@if($player5)
    <tr>
    <td>Your pos5 support:</td>
    <td><a href="{{route('show.player', $player5->id)}}">{{$player5->name}}</a></td>
    <td><img height="50" src="{{$player5->photo ? $player5->photo->file: 'no user photo'}}" alt=""></td>
    <td>{{$player5->bio}}</td>
    <td>{{$player5->power}}</td>
    <td>{{$player5->cost_money}}</td>
    <td>{{$player5->sub_only}}</td>
    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>5 ])}}"> Kick your pos5 support! <br></a></tr>
@else
                    <a href="{{route('add.player',['team'=>$team->id, 'position'=>5 ])}}">Get pos5 support <br></a>
@endif

</table>





    @endsection