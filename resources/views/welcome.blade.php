@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                Showing {{ ( $posts->currentpage() - 1) * $posts->perpage() + 1 }}
                to {{ ( ( $posts->currentpage() - 1 ) * $posts->perpage() ) + $posts->count() }}
                of {{ $posts->total() }} posts

                <div class="list-group">

                  @foreach($posts as $post)
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">{{ $post->id }}. {{ $post->title }}</h4>
                    <p class="list-group-item-text">Created {{ $post->user->name }}
                        at
                        {{ $post->created_at->format('l M d, Y') }}</p>
                  </a>
                   @endforeach
                </div>

                {{ $posts->links() }}

            </div>
        </div>
    </div>
@endsection
