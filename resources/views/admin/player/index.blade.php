@extends('layouts.app')
@section('content')


    @if(Session::has('deleted_player'))
        <h1 class="bg-danger">{{session('deleted_player')}}</h1>
    @endif

    <table>
        <tr>
            <th>Name</th>
            <th>photo</th>
            <th>bio</th>
            <th>power</th>
            <th>cost </th>
            <th>sub only</th>
            <th>created at</th>
            <th>updated at</th>
        </tr>
        @if($players)
            @foreach($players as $player)
                <tr>
                    <td><a href="{{route('players.edit', $player->id)}}">{{$player->name}}</a></td>
                    <td><img height="50" src="{{$player->photo ? $player->photo->file: 'no user photo'}}" alt=""></td>
                    <td>{{$player->bio}}</td>
                    <td>{{$player->power}}</td>
                    <td>{{$player->cost_money}}</td>
                    <td>{{$player->sub_only}}</td>
                    <td>{{$player->created_at->diffForHumans()}}</td>
                    <td>{{$player->updated_at->diffForHumans()}}</td>
                </tr>

    @endforeach
    @endif
@stop