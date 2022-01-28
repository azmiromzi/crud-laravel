@extends('layouts.main')


@section('title')
Update post
@endsection

@section('content')
    
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data" class="my-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">title</label>
            <input class="form-control" type="text" value="{{ $post->title }}" name="title">
        </div>
        <div class="form-group my-3">
            <label for="thumbnail">thumbnail</label>
            <input class="form-control" type="file" name="thumbnail">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="4">{{ $post->content }}</textarea>
        </div>
        <div class="form-group my-3">
           <button type="submit" value="Create" class="btn btn-success">Update</button>
        </div>
    </form>
@endsection