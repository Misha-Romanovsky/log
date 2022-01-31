@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/table.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

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

    <form class="" action="{{ route('posts.store') }}" method="post">
      <?php @csrf ?>
      <div class="form-group">
        <label for="post-title">Name</label>
        <input type="text" name="title" class="form-control" id="post-title">
      </div>
      <div class="form-group">
        <label for="post-description">Description</label>
        <textarea name="description" class="form-control" id="post-description" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="post-price">Price</label>
        <input type="text" name="price" class="form-control" id="post-price">
      </div>
      <button type="submit" class="btn btn-success">Добавить пост</button>
    </form>
  </div>
</div>

<script src="/js/table.js"></script>
@endsection
