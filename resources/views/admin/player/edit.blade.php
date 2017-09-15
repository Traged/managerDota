@extends('layouts.admin')


@section('content')

    <h1> Edit Player</h1>
    <div class="col-sm-3">

        <img src="{{$player->photo ? $player->photo->file : "no image"}}" alt="" class="img img-responsive img-rounded">


    {!! Form::model($player, ['method'=>'PATCH', 'route'=>['players.update', $player->id], 'enctype' =>'multipart/form-data']) !!}

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

        {!! Form::submit('Edit player', ['class'=>'btn btn-primary']) !!}

    </div>






    {{csrf_field()}}

    {!! Form::close() !!}
        <div>

        {!! Form::model($player, ['method'=>'DELETE', 'route'=>['players.destroy', $player ->id]]) !!}

        <div class="form-group">

            {!! Form::submit('DELETE HIM', ['class'=>'btn btn-danger']) !!}

        </div>
    {{csrf_field()}}
    {!! Form::close() !!}
        </div>


@stop