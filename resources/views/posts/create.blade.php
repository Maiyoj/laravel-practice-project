@extends('layouts.app')
 @section('content')

 <h1>Create Posts</h1>

 {!! Form::open(['action'=> 'postscontroller@store', 'method' => 'POST',  'enctype' => 'multipart/form-data']) !!}
 <div class="Form-group">
 {{Form::label('title', 'Title')}}
{{Form::text('title', '', ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
</div>


 {!! Form::open(['action'=> 'postscontroller@store', 'method' => 'POST']) !!}
 <div class="Form-group">
 {{Form::label('body', 'Body')}}
{{Form::textarea('body', '', [ 'id'=> 'article-ckeditor', 'class'=> 'form-control', 'placeholder'=> 'Body Text'])}}
</div>
<div class="form-group">
{{form::file('cover_image')}}
</div>

{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}

 @endsection