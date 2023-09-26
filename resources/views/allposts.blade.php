@extends('layouts.admin')
@section('title')
Post
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">View all Posts</h3>
        <div class="card-tools">
            @if(Auth::user()->role == 'superadmin')
                <a href="{{ url('createPost') }}" class="btn btn-primary"><i class="fas fa-shield-alt"></i> Add new Post</a>
            @endif
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Descrption</th>
                    <th>Date Posted</th>
                    
                        <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $item )
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td><span class="tag tag-success">{{ $item->created_at}} </span></td>
                        @if(Auth::user()->role == 'superadmin')
                            <td>
                                <a href="{{ url('edit') }}/{{$item->id}}" class="btn btn-info">Edit</a>
                                <a href="{{ url('delete') }}/{{$item->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        @elseif(Auth::user()->role == 'developer')
                            <td>
                                <a href="{{ url('edit') }}/{{$item->id}}" class="btn btn-info">Edit</a>
                            </td>
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td><i class="fas fa-folder-open"></i> No Record found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
