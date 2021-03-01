@extends('layouts.dashboard')
@section('content')
<h1>Edit this Post</h1>
@if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="" action="{{route ('admin.posts.update', ['post' => $post->slug] )}}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Titolo del post: </label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="body">Testo del post: </label>
        <textarea name="body" rows="8" cols="80">{{$post->body}}</textarea>
        @error('body')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" name="button">INVIA</button>
      </form>
@endsection
