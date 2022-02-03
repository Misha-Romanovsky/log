@extends('layouts.app')

@section('title', 'Edit post №'.$post->title)

@section('content')

<div class="container">
  <div class="row">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action="{{ route('posts.update', $post) }}">
       {{ csrf_field() }}
       {{ method_field('PATCH') }}

      <div class="form-group">
        <label for="post-title">Name</label>
        <input name="title" type="text" value="{{$post->title}}" class="form-control" id="post-title">
      </div>
      <div class="form-group">
        <label for="post-description">Description</label>
        <textarea name="description" class="form-control" id="post-description" rows="3"> {{$post->description}} </textarea>
      </div>
      <div class="form-group">
        <label for="post-price">Price</label>
        <input name="price" type="number" value="{{$post->price}}" class="form-control" id="post-price">
      </div>

      <button type="submit"  class="btn btn-success">Edit post</button>
      <a href="{{route('posts.index')}}" class="btn btn-success">Back</a>
    </form>
  </div>
</div>

@endsection
