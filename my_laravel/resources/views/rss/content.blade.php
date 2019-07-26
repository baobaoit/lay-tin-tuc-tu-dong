@extends('layouts.news')

@section('content')
   <div class="col1">
    <h1>{{$title}}</h1>
 
    @php
        print_r($postContent);
    @endphp
</div>
<div class="col">
	  @include('rss.col2')
	</div>

@endsection