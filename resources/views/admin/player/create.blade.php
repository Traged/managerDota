@extends('layouts.app')


@section('content')

    <h1> Create Player</h1>



    {!! Form::open(['method'=>'POST', 'action'=>'AdminPlayerController@store', 'files'=>true]) !!}

    <div class="form-group">

        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}


    </div>



    <div class="form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::file('photo_id',null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('power', 'Power') !!}
        {!! Form::text('power', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cost_money', 'Cost::') !!}
        {!! Form::text('cost_money', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('bio', 'Bio:') !!}
        {!! Form::textarea('bio', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sub_only', 'sub_only:') !!}
        {!! Form::select('sub_only', array(1=> 'Sub Only', 0=> 'Normal'), ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

    </div>






    {{csrf_field()}}

    {!! Form::close() !!}


@stop