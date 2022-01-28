@extends('layouts.main-layout')
@section('content')
    <h2> Comic Details </h2>
    <div class="comic-details">
        <h3> Title: {{ $comic -> title }} </h3>
        <p> Author: {{ $comic -> author }} </p>
        <span> Pages: {{ $comic -> pages }}</span>
    </div>
@endsection
