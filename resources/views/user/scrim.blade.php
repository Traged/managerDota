@extends('layouts.app')
@section('content')
    <H1>SCRIM {{$winner}}</H1>

    <H2>Match score:   {{$time}}</H2>
    <h2>Lenght: {{$time}}</h2>

    Game went like this <br>{!! $log !!}

























    @endsection