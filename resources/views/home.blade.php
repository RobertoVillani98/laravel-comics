@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')

<div class="series">
    <div class="container">
        <h2>Current series</h2>
        <div class="row">
            @foreach ($comics as $comic)
                <a href="#" class="card">
                    <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
                    <span>{{$comic["title"]}}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection