@extends('layouts.main-layout')
@section('content')
    <h2>All comics</h2>
    <div id="comics">
        @foreach ($comics as $comic)
            <div class="comic-card">
                <h3>Title:
                    <a href="{{ route('show', $comic -> id) }}">{{ $comic -> title }}</a>
                </h3>
            </div>
        @endforeach
    </div>
@endsection
