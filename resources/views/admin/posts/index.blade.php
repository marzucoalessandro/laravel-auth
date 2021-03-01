@extends('layouts.dashboard')

@section('content')
<h1>Posts for Admin</h1>
<a href="{{route ('admin.posts.create')}}" class="btn btn-success">Create a new post</a>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Body</th>
      <th>Slug</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td scope="row">{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->slug}}</td>
      <td>
        <a href="{{route ('admin.posts.show', ['post'=> $post->slug])}}" class="btn btn-primary">View</a>
        <a href="{{route ('admin.posts.edit', ['post'=> $post->slug])}}" class="btn btn-warning">Edit</a>

        <form class="" action="{{route('admin.posts.destroy', ['post'=> $post->slug] )}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" name="button" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
