@extends('layouts.dashboard')
@section('content')
<h1>Crea un nuovo post</h1>
@if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="form-group" action="{{route ('admin.posts.store')}}" method="post">
        @csrf

        <label for="title">Titolo del post: </label>
        <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="body">Testo del post: </label>
        <textarea class="form-control" name="body" rows="8" cols="80">{{ old('body')}}</textarea>
        @error('body')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary mt-2" type="submit" name="button">INVIA</button>
      </form>
@endsection
