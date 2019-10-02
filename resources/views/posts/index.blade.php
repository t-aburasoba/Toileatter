@extends('layout')

@section('content')
    <h1>投稿一覧</h1>

    <hr/>

    @foreach($posts as $post)
        <article>
            <h2>
                <a href="{{ url('posts', $post->post) }}">
                    {{ $posts->closet_bowl_number }}
                </a>
            </h2>
        </article>
    @endforeach
@endsection