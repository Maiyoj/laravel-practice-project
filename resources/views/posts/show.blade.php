@extends('layouts.app')
 @section('content')
<a href="/posts" class="btn btn_default">Go Back</a>
 <h1>{{$post['title']}}</h1>
 <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
 <br>
 <br>
 <div>
 {!!$post['body']!!}
 </div>
 <hr>
 <small> written on {{$post['Created_at']}}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post['user_id'])
<a href="/posts/ {{$post->id}}/edit" class="btn btn-primary">Edit</a>
{!!Form::open(['action' =>['postscontroller@destroy', $post->id], 'method' =>'POST', 'class' => ' btn  pull-right'])!!}
{{form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!}
@endif
@endif
 @endsection