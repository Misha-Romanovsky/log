@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')


<div class="container">
  <div class="row">
 <a href="{{route('posts.create')}}" class="btn btn-success">Create post</a>

 @if(session()->get('success'))
     <div class="alert alert-success">
         {{ session()->get('success') }}
     </div>
 @endif

    <table>
      <thead>
        @foreach($posts as $post)
        <tr>
          <th>#</th>
          <th>User</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th></th>
        </tr>
        <thead>
        <tbody>
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user_name }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td> {{ $post->price }} </td>
            <td class="table-buttons">
            @if($post->user_name == Auth::user()->name)
              <a href="{{route('posts.show', $post) }}" class="btn btn-success">
              <i class='bx bx-bullseye'></i>
            </a>
            <a href="{{route('posts.edit', $post)}}" class="btn btn-primary">
              <i class='bx bx-edit-alt' ></i>
            </a>
            <form method="POST" action="{{route('posts.destroy', $post)}}">
              {{csrf_field() }}
              {{method_field('delete') }}


              <button type="submit" class="btn btn-danger">
                <i class='bx bx-trash' ></i>
              </button>
            </form>
            @else
            <a href="{{route('posts.show', $post) }}" class="btn btn-success">
            <i class='bx bx-bullseye'></i>
          </a>
          @endif

            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</div>

@endsection
