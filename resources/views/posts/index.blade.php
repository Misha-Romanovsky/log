@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/table.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<div class="container">
  <div class="row">
 <a href="{{route('posts.create')}}" class="btn btn-success">Создать пост</a>

@if(session->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
@endif

    <table>
      <thead>
        @foreach($posts as $post)
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th></th>
        </tr>
        <thead>
        <tbody>
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td> {{ $post->price }} </td>
            <td class="table-buttons">
              <a href="{{route('posts.show', $post) }}" class="btn btn-success">
              <i class='bx bx-bullseye'></i>
            </a>
            <a href="{{route('posts.edit', $post)}}" class="btn btn-primary">
              <i class='bx bx-edit-alt' ></i>
            </a>
            <form method="POST">
              <button type="submit" class="btn btn-danger">
                <i class='bx bx-trash' ></i>
              </button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</div>

<script src="/js/table.js"></script>
@endsection
