@extends('layouts.app')

@section('title', 'Show post №'.$post->title)

@section('content')
<div class="container">
  <div class="row">
    <h3>{{$post->title}}</h3>
    <p>{{$post->description}}</p>
    <p><b>{{$post->price}}</b></p>
    <a href="{{route('posts.index')}}" class="btn btn-success">Back</a>

  </div>
</div>
@endsection
