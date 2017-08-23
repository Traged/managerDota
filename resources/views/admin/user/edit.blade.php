@extends ('layouts.app')

@section('content')

    <h1>Edit User</h1>

    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file : "no image"}}" alt="" class="img img-responsive img-rounded">

    </div>

    <div class="clearfix"></div>

    {!! Form::model($user, ['method'=>'PATCH', 'route'=>['users.update', $user->id], 'enctype' =>'multipart/form-data']) !!}

    <div class="form-group">

        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
        {!! Form::label('role_id', 'Role id') !!}
        {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null , ['class'=>'form-control']) !!}
        {!! Form::label('photo_id', 'title') !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
        {!! Form::label('game_money', 'game_money') !!}
        {!! Form::text('game_money', null, ['class'=>'form-control']) !!}
        {!! Form::label('password', 'Password') !!}
        {!! Form::text('password', null, ['class'=>'form-control']) !!}



    </div>

    <div class="form-group">

        {!! Form::submit('Update', ['class'=>'btn btn-primary', ]) !!}

    </div>


    {{csrf_field()}}

    {!! Form::close() !!}


    {!! Form::model($user, ['method'=>'DELETE', 'route'=>['users.destroy', $user ->id]]) !!}

    <div class="form-group">

        {!! Form::submit('DELETE HIM', ['class'=>'btn btn-danger']) !!}

    </div>
    {{csrf_field()}}
    {!! Form::close() !!}


    {{--@if(count($errors) > 0)--}}


        {{--<div class="alert alert-danger">--}}

            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}

                    {{--<li>{{$error}}</li>--}}
                {{--@endforeach--}}

            {{--</ul>--}}

        {{--</div>--}}

    {{--@endif--}}

@stop