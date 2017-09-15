@extends('layouts.app')
@section('content')



    <table>
        <tr>
            <th>Name</th>
            <th>Logo</th>

        </tr>





        @if($matches)
            {{--@php(dd($teams)  )--}}
            @foreach($matches as $match)



                            <td><h3><a href="{{route('match', $match->id)}}">{{$match->id}}</a></h3></td>
                            {{--<td><img height="50" src="{{$team->photo ? $team->photo->file: 'no team photo'}}" alt=""></td>--}}
                            {{--<td> <a href="{{route('match.teams', $team->id)}}"><button type="button">Match</button></a></td>--}}
                            {{--<td> <a href="{{route('scrim.teams', $team->id)}}"><button type="button">Scrim</button></a></td>--}}

                            {{--{!! Form::model($team,  ['method'=>'POST', 'route'=>'insert.player', 'enctype' =>'multipart/form-data']) !!}--}}
                            {{--<div class="form-group">--}}
                            {{--{!! Form::hidden('cost', $player->cost_money) !!}--}}
                            {{--{!! Form::hidden($position, $player->id) !!}--}}
                            {{--{!! Form::hidden('future', $player->id) !!}--}}
                            {{--</div><div class="form-group">--}}
                            {{--{!! Form::submit('Purchase',['class'=>'btn btn-danger']) !!}--}}

                            {{--</div>--}}
                            {{--{{csrf_field()}}--}}
                            {{--{!! Form::close() !!}--}}




    @endforeach
    @endif
@endsection



