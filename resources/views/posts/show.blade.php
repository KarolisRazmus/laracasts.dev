@extends('layouts.master')

@section('content')

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title">{{$post->title}}</h2>
                    <p class="blog-post-meta">{{$post->created_at}}</p>

                    <p>
                        {{$post->body}}
                    </p>

                    <div class="comments">

                        <ul class="list-group">

                        @foreach($post->comments as $comment)

                            <li class="list-group-item">

                                <strong>

                                    {{$comment->created_at->diffForHumans()}}: &nbsp;

                                </strong>

                                {{$comment->body}}

                            </li>

                        @endforeach

                        </ul>

                    </div>

                    <hr>

                    {{-- Add a comment --}}

                    <div class="card">

                        <div class="card-block">

                            <form method="POST" action="/posts/{{ $post->id }}/comments">

                                {{csrf_field()}}

                                <div class="form-group">

                                    <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>

                                </div>

                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary">Publish</button>

                                </div>

                            </form>

                            @include('layouts.errors')

                        </div>

                    </div>

                </div><!-- /.blog-post -->

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div><!-- /.blog-main -->


@endsection