@extends('layouts.main')


@section('title')
Create post
@endsection

@section('content')
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="my-3">
        @csrf
        <div class="form-group">
            <label for="title">title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group my-3">
            <label for="thumbnail">thumbnail</label>
            <input class="form-control" type="file" name="thumbnail">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="4"></textarea>
        </div>
        <div class="form-group my-3">
           <button type="submit" value="Create" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection