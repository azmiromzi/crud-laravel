@extends('layouts.main')

@section('title', 'Show post')

@section('content')
 <h2>{{ $post->title }}</h2>
 <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="img-fluid img-thumbnail">
 <p>{{ $post->content }}</p>
 
@endsection