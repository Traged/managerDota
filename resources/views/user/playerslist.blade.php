{{--@extends('layouts.app')--}}
{{--@section('content')--}}


    {{--@if(Session::has('deleted_player'))--}}
        {{--<h1 class="bg-danger">{{session('deleted_player')}}</h1>--}}
    {{--@endif--}}

    {{--<table>--}}
        {{--<tr>--}}
            {{--<th>Name</th>--}}
            {{--<th>photo</th>--}}
            {{--<th>bio</th>--}}
            {{--<th>power</th>--}}
            {{--<th>cost </th>--}}
            {{--<th>sub only</th>--}}
            {{--<th>created at</th>--}}
            {{--<th>updated at</th>--}}
        {{--</tr>--}}
        {{--@if($players)--}}
            {{--@foreach($players as $player)--}}
                {{--<tr>--}}
                    {{--<td><a href="{{route('show.player', $player->id)}}">{{$player->name}}</a></td>--}}
                    {{--<td><img height="50" src="{{$player->photo ? $player->photo->file: 'no user photo'}}" alt=""></td>--}}
                    {{--<td>{{$player->bio}}</td>--}}
                    {{--<td>{{$player->power}}</td>--}}
                    {{--<td>{{$player->cost_money}}</td>--}}
                    {{--<td>{{$player->sub_only}}</td>--}}
                    {{--<td>{{$player->created_at->diffForHumans()}}</td>--}}
                    {{--<td>{{$player->updated_at->diffForHumans()}}</td>--}}
                {{--</tr>--}}

    {{--@endforeach--}}
    {{--@endif--}}
{{--@stop--}}

        @extends('layouts.app')
        @section('content')
            {{--<link href="{!! asset('assets/bootstrap.css') !!}" rel="stylesheet">--}}
            {{--<link href="{!! asset('assets/table.css') !!}" rel="stylesheet">--}}


            @if(Session::has('deleted_player'))
                <h1 class="bg-danger">{{session('deleted_player')}}</h1>
            @endif

            <div class="">
                <div class="card-header">
                    <i class="fa fa-table"></i>
                   <H2>Players</H2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                        <tr>
                            <th>Name</th>
                            <th>photo</th>
                            <th >bio</th>
                            <th>power</th>
                            <th>cost </th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>photo</th>
                            <th >bio</th>
                            <th>power</th>
                            <th>cost </th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if($players)
                            @foreach($players as $player)
                                {{--@php $bio= $player->bio;@endphp--}}

                                <tr>
                                    <td><a href="{{route('show.player', $player->id)}}">{{$player->name}}</a></td>
                                    <td><img height="50" src="{{$player->photo ? $player->photo->file: 'no user photo'}}" alt=""></td>
                                    <td>{{$value = str_limit($player->bio, 100)}}</td>
                                    <td>{{$player->power}}</td>
                                    <td>{{$player->cost_money}}</td>
                                    {{--$value = str_limit($bio, 7);--}}
                                    {{--<td>{{$player->sub_only}}{{ $myVariable|truncate:"10":"..." }}</td>--}}
                                    {{--<td>{{$player->created_at->diffForHumans()}}</td>--}}
                                    {{--<td>{{$player->updated_at->diffForHumans()}}</td>--}}
                                </tr>

                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">
                Updated yesterday at 11:59 PM
            </div>
            <script src="{!! asset('assets/jquery.js') !!}"></script>
                <script src="{!! asset('assets/jquery.dataTables.js') !!}"></script>
            <script src="{!! asset('assets/dataTables.bootstrap4.js') !!}"></script>

                <script> (function($) {
                        $(document).ready(function() {
                            $('#dataTable').DataTable();
                        });
                    })(jQuery); // End of use strict</script>
@endsection

