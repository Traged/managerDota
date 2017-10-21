@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-2"></div>

        <div class="col-lg-10">
     @if($news=='1')
         <div class="panel panel-default"><div class="panel-body">
                 <b><strong>Sorry but there wont be any NEWS</strong></b> <br>
                 Reason should be that there were not any updates yet or
                 I killed 'NEWS' database (She was evil trust me!).</div></div>
    @else
         @foreach($news as $new)
             <div class="panel panel-default"><div class="panel-body">
                     <b><strong>{{$new->title}}</strong></b> <br>
                     {{$new->text}}</div></div>
         @endforeach
    @endif
        </div>
    </div>
    @endsection