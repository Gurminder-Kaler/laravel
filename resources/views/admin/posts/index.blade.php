@extends('layouts.admin')
@section('content')
    <h1>Posts</h1>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Post By</th>
          <th scope="col">Category</th>
          <th scope="col">Photo</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
      </thead>
      <tbody>
      @if($posts)
        @foreach($posts as $post)
      <tr>


          <td>{{$post->id}}</td>
          <td>{{$post->user->name}}</td>
          <td>{{$post->category_id}}</td>
          <td><img height="50px" width="50px" src="{{$post->photo ? $photo->photo->file: 'http://placehold.it/400x400'}}" alt="No image found"></td>
          <td>{{$post->title}}</td>
          <td>{{$post->body}}</td>
          <td>{{$post->created_at->diffForhumans()}}</td>
          <td>{{$post->updated_at->diffForhumans()}}</td>

        </tr>
        @endforeach
      @endif
      </tbody>
    </table>

    @endsection