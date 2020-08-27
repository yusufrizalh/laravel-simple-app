@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h3>All Posts</h3>
                <hr>
            </div>    
            <div>
                <a href="/posts/create" class="btn btn-primary">New Post</a>
            </div> 
        </div> 
        <div class="row">
                @forelse ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            <div>{{ Str::limit($post->body, 100, ' ...') }}</div>
                            <a href="/posts/{{ $post->slug }}">Read more</a>
                        </div>
                        <div class="card-footer">
                            {{-- Published on {{ $post->created_at->format("d F, Y") }}  --}}
                            Published on {{ $post->created_at->diffForHumans() }} 
                        </div>
                    </div>
                </div>
                @empty 
                <div class="col-md-12">
                    <div class="alert alert-info">
                        There's no posts here. 
                    </div>
                </div>
                @endforelse 
        </div>
        <div class="d-flex justify-content-center">
            {{ $posts->links() }} 
        </div>
    </div>
@endsection 
{{-- @stop  --}}