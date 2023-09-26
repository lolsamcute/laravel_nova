@extends('layouts.admin')
@section('pageName')
Create Posts
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add new Post</h3>
        <div class="card-tools">
            <a href="{{ url('allPost') }}" class="btn btn-success"><i class="fas fa-shield-alt"></i> See all Posts</a>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="/createPost">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Post Title"
                    class="form-control">
            </div>
            
            
            <div class="form-group">
                <textarea name="description" placeholder="Post Description"
                    class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-lg btn-primary"><i class="fas fa-save"></i> Save Post</button>

    </form>
    </div>
</div>

@endsection
