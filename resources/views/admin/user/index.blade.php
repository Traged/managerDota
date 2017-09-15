@extends('layouts.admin')
@section('content')


    @if(Session::has('deleted_user'))
        <h1 class="bg-danger">{{session('deleted_user')}}</h1>
    @endif

    <table>
        <tr>
            <th>Name</th>
            <th>photo</th>
            <th>email</th>
            <th>role</th>
            <th>Money (game)</th>
            <th>Team</th>
            <th>created at</th>
            <th>updated at</th>
        </tr>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td><img height="50" src="{{$user->photo ? $user->photo->file : 'no user photo'}}" alt=""></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->game_money}}</td>
                    <td>{{$user->team_id ? $user->team->name : 'Teamless'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>

    @endforeach
    @endif
@stop