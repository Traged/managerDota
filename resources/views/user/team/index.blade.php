@extends('layouts.app')
@section('content')


<h1>

Team: <a href="{{route('team.edit', $team->id)}}">{{$team->name}} </a>     <img height="100" src="{{$team->photo ? $team->photo->file: 'no team photo'}}" alt="Team">
</h1>

{{--<div class="chip">--}}
    {{--<img src="{{$team->photo ? $team->photo->file: 'no team photo'}}" alt="Team" width="96" height="96">--}}
    {{--something--}}
{{--</div>--}}


{{--<table>--}}
{{--<tr><th>Role</th><th>Name</th> <th>Photo</th><th>Bio</th><th>Power</th><th>Cost</th><th>sub</th></tr>--}}
<div class="col-md-12">
<div class="row">
@if($player1)
{{--<tr>--}}  <div class="col-md-4">
<h3>Carry:</h3>
<div class="card">


    <img src="{{$player1->photo ? $player1->photo->file: 'no user photo'}}"  alt="Avatar" style="width:100%">
    <div class="container">
        <a href="{{route('show.player', $player1->id)}}">{{$player1->name}}</a>
        <br>
    <b>Power:  </b>{{$player1->power}} <br>
    <b>Cost:  </b>{{$player1->cost_money}}
        {{--{{$player1->bio}}--}}
    {{--<td>{{$player1->sub_only}}</td>--}}

</div>
</div>
    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>1 ])}}"> Kick your carry! <br></a>
{{--</tr>--}}</div>
    @else
        <div class="col-md-4">
    <a href="{{route('add.player',['team'=>$team->id, 'position'=>1 ])}}"> Get carry <br></a>
        </div>

@endif
@if($player2)
        <div class="col-md-4">
            <h3>Mid:</h3>
            <div class="card">


                <img src="{{$player2->photo ? $player2->photo->file: 'no user photo'}}"  alt="Avatar" style="width:100%">
                <div class="container">
                    <a href="{{route('show.player', $player2->id)}}">{{$player2->name}}</a>
                    <br>
                    <b>Power:  </b>{{$player2->power}} <br>
                    <b>Cost:  </b>{{$player2->cost_money}}
                    {{--{{$player1->bio}}--}}
                    {{--<td>{{$player1->sub_only}}</td>--}}

                </div>
            </div>

    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>2 ])}}"> Kick your mid! <br></a></div>
@else
                <div class="col-md-4">
    <a href="{{route('add.player',['team'=>$team->id, 'position'=>2 ])}}"> Get mid <br></a>
                </div>
@endif

@if($player3)
        <div class="col-md-4">
            <h3>Offlane:</h3>
            <div class="card">


                <img src="{{$player3->photo ? $player3->photo->file: 'no user photo'}}"  alt="Avatar" style="width:100%">
                <div class="container">
                    <a href="{{route('show.player', $player3->id)}}">{{$player3->name}}</a>
                    <br>
                    <b>Power:  </b>{{$player3->power}} <br>
                    <b>Cost:  </b>{{$player3->cost_money}}
                    {{--{{$player1->bio}}--}}
                    {{--<td>{{$player1->sub_only}}</td>--}}

                </div>
            </div>
            <a href="{{route('kick.player',['team'=>$team->id, 'position'=>1 ])}}"> Kick your carry! <br></a>
            {{--</tr>--}}</div>
@else
                        <div class="col-md-4">
    <a href="{{route('add.player',['team'=>$team->id, 'position'=>3 ])}}"> Get offlane <br></a>
                        </div>
@endif
</div>
    <div class="row">
@if($player4)
        <div class="col-md-4">
            <h3>Position 4:</h3>
            <div class="card">


                <img src="{{$player4->photo ? $player4->photo->file: 'no user photo'}}"  alt="Avatar" style="width:100%">
                <div class="container">
                    <a href="{{route('show.player', $player4->id)}}">{{$player4->name}}</a>
                    <br>
                    <b>Power:  </b>{{$player4->power}} <br>
                    <b>Cost:  </b>{{$player4->cost_money}}
                    {{--{{$player1->bio}}--}}
                    {{--<td>{{$player1->sub_only}}</td>--}}

                </div>
            </div>
    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>4 ])}}"> Kick your pos4 support! <br></a></div>
@else
                            <div class="col-md-4">
            <a href="{{route('add.player',['team'=>$team->id, 'position'=>4 ])}}">Get pos4 support <br></a>
                            </div>
@endif
@if($player5)
        <div class="col-md-4">
            <h3>Position 5:</h3>
            <div class="card">


                <img src="{{$player5->photo ? $player5->photo->file: 'no user photo'}}"  alt="Avatar" style="width:100%">
                <div class="container">
                    <a href="{{route('show.player', $player5->id)}}">{{$player5->name}}</a>
                    <br>
                    <b>Power:  </b>{{$player5->power}} <br>
                    <b>Cost:  </b>{{$player5->cost_money}}
                    {{--{{$player1->bio}}--}}
                    {{--<td>{{$player1->sub_only}}</td>--}}

                </div>
            </div>
    <a href="{{route('kick.player',['team'=>$team->id, 'position'=>5 ])}}"> Kick your pos5 support! <br></a>
        </div>
@else
                                    <div class="col-md-4">
                    <a href="{{route('add.player',['team'=>$team->id, 'position'=>5 ])}}">Get pos5 support <br></a>
                                    </div>
@endif
</div>
{{--</table>--}}
</div>




    @endsection