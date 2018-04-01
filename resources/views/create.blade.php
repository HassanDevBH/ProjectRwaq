@extends('master.style')

@section('title','Create Post')
@section('des','New Post')

@section('body')

    <div class="col-lg-10">
        <form action="{{route('posts.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title"  />
            </div>
            <div class="form-group">
                <label for="content">body</label>
                <textarea rows="4" class="form-control" name="body"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </form>
    </div>

@endsection