@extends('layouts.backend')

@section('page-title')
    Blog Posts
@stop

@section('breadcrumb-title')
    Blog Posts
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>Published?</th>
                <th>Author</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
    @forelse($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td><a href="{{URL::route('admin.blog.show', $post->slug)}}" target="_blank">/blog/{{ $post->slug }}</a></td>
            <td>{{ $post->isPublished() }}</td>
            <td><a href="{{URL::route('admin.users.show', $post->author->id)}}" target="_blank">{{ $post->author->name }}</a></td>
            <td>{{ $post->updated_at->diffForHumans() }}</td>
            <td><a href="{{ URL::route('admin.blog.show', $post->id) }}" class="btn btn-info" target="_blank"><i class="fa fa-eye"></i> View</a>
            <a href="{{ URL::route('admin.blog.edit', $post->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
            <a href="{{ URL::route('admin.blog.destroy', $post->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No Post were found.</td>
        </tr>
    @endforelse
    </table>
@stop
