@extends('layouts.main')

@section('title')
  Posts
@endsection

@section('content')
  @forelse ($posts as $post)
  <div class="card my-4" >
  <div class="card-body">
    <h5 class="card-title">
      <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
    </h5>  
    <p class="card-text">
       <span class="badge badge-info bg-dark">Created</span> : {{ $post->created_at->diffForHumans() }}
       <span class="badge badge-info bg-dark">Updated</span> : {{ $post->updated_at->diffForHumans() }}
    </p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
     
  @empty
      <h4>No posts yet!</h4>
  @endforelse
@endsection
