@extends('layouts.main-layout')
@section('content')
    <h2>All comics</h2>
    <div id="comics">
        @foreach ($comics as $comic)
            <div class="comic-card">
                <h3>Title: {{ $comic -> title }}</h3>
            </div>
        @endforeach
    </div>
@endsection
