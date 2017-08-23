@extends('layouts.app')
@section('content')


    <h1>Create Team</h1>


    {!! Form::open(['method'=>'POST', 'action'=>'UserTeamController@store',  'enctype' =>'multipart/form-data']) !!}

    <div class="form-group">

        {!! Form::label('title', 'Name of your team') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::file('photo_id',null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('Create Team', ['class'=>'btn btn-primary']) !!}

    </div>


    {{csrf_field()}}

    {!! Form::close() !!}
@stop





