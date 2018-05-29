@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $article->title }}
                        <span class="float-right">belongs to user {{ $article->user_id }}</span>
                    </div>

                    <div class="card-body">{{ $article->text }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
