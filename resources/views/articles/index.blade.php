@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach ($articles as $article)
                        <li class="list-group-item">
                            <a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a>
                            <span class="float-right">belongs to user {{ $article->user_id }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
