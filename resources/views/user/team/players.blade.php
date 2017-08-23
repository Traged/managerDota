@extends('layouts.app')
@section('content')
    <style>
    .hide {
    visibility:hidden;
    }
    </style>


    @if($position==1)
    <h1>Select your carry</h1> <?php $position='player1_id'?>
    @elseif($position==2)
        <h1>Select your mid</h1> <?php $position='player2_id'?>
        @elseif($position==3)
        <h1>Select your offlane</h1> <?php $position='player3_id'?>
    @elseif($position==4)
        <h1>Select your position 4 support </h1> <?php $position='player4_id'?>
    @elseif($position==5)
        <h1>Select your position 5 support</h1> <?php $position='player5_id'?>
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
                    <td>
                        @if($user->bonity($user->game_money, $player->cost_money))
                        {!! Form::model($team,  ['method'=>'POST', 'route'=>'insert.player', 'enctype' =>'multipart/form-data']) !!}
                        <div class="form-group">
                            {!! Form::hidden('cost', $player->cost_money) !!}
                            {!! Form::hidden($position, $player->id) !!}
                            {!! Form::hidden('future', $player->id) !!}
                        </div><div class="form-group">
                            {!! Form::submit('Purchase',['class'=>'btn btn-danger']) !!}

                        </div>
                        {{csrf_field()}}
                        {!! Form::close() !!}</td>
                    @endif
                </tr>

    @endforeach
    {{--{{dd($position)}}--}}

    @endif





















    @stop