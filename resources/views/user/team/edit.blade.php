@extends('layouts.app')
@section('content')
    <h1>Edit your team</h1>


    {!! Form::model($team, ['method'=>'PATCH', 'route'=>['team.update', $team->id], 'enctype' =>'multipart/form-data']) !!}

    <div class="form-group">

        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! Form::label('photo_id', 'Logo') !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group">

        {!! Form::submit('Update', ['class'=>'btn btn-primary', ]) !!}

    </div>


    {{csrf_field()}}

    {!! Form::close() !!}





















@endsection