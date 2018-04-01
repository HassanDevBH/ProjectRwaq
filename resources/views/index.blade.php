@extends('master.style')

@section('title','All Posts')
@section('des','Show all post')

@section('link')
<a href="{{route('posts.create')}}" class="btn btn-primary my-2">New Post</a>

@endsection

@section('body')
@foreach ($posts as $rs)
    <div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <div class="card-body">
            <h4>{{ $rs->post_id }}-{{ $rs->title }}</h4>
            <p class="card-text">{{ $rs->body }}</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            
                <form method="post" action="{{ route('posts.destroy',$rs->post_id) }}">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                    <a class="btn btn-sm btn-outline-secondary" href="{{route('posts.edit',$rs->post_id)}}">Edit</a>
                    <input type="submit" value="Delete" class="btn btn-sm btn-outline-secondary">
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
@endforeach
@endsection