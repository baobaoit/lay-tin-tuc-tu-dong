@extends('layouts.app')

@section('content')

    <h1>{{$title}}</h1>
    @php
        print_r($postContent);
    @endphp

@endsection