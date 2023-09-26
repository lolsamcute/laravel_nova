@extends('layouts.admin')
@section('pageName')
Edit Post
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Post</h3>
        <div class="card-tools">
            <a href="{{ url('allPost') }}" class="btn btn-success"><i class="fas fa-shield-alt"></i> See all Posts</a>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="/edit/{{$posts->id}}">
            @csrf
            <div class="form-group">
                <input type="text" name="name" value="{{$posts->name}}" placeholder="Post Title"
                    class="form-control">
            </div>
            
            
            <div class="form-group">
                <textarea name="description" placeholder="Post Description"
                    class="form-control">{{$posts->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-lg btn-primary"><i class="fas fa-save"></i> Save Edit</button>

    </form>
    </div>
</div>

@endsection
