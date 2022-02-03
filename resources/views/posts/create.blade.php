@extends('layouts.app')

@section('title', 'Create post')

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


    <form method="POST" action="{{ route('posts.store') }}">
       {{ csrf_field() }}

      <div class="form-group">
        <label for="post-title">Name</label>
        <input name="title" type="text" value="{{old('title')}}" class="form-control" id="post-title">
      </div>
      <div class="form-group">
        <label for="post-description">Description</label>
        <textarea name="description" class="form-control" id="post-description" rows="3"> {{old('description')}} </textarea>
      </div>
      <div class="form-group">
        <label for="post-price">Price</label>
        <input name="price" type="number" value="{{old('title')}}" class="form-control" id="post-price">
      </div>

      <button type="submit"  class="btn btn-success">Create post</button>
      <a href="{{route('posts.index')}}" class="btn btn-success">Back</a>
    </form>
  </div>
</div>

@endsection
