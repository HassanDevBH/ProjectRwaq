@extends('master.style')

@section('title','Edit Post')
@section('des','edit the post')

@section('body')

    <div class="col-lg-10">
        <form action="{{route('posts.update',$post->post_id)}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PUT"/>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}"  />
            </div>
            <div class="form-group">
                <label for="content">body</label>
                <textarea rows="4" class="form-control" name="body">{{$post->body}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </form>
    </div>

@endsection