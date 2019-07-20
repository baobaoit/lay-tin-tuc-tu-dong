@extends('layouts.news')

@section('content')
    <style>

        .rss{
            float:left;

        }
    </style>
    <div id = "content">
        <div class="col-wrap">
            <div class="col1">
                <h1>Thế giới</h1>
                <div class="rss">
                    @foreach($newsContents as $content)
                        @foreach($content as $item)
                            @if( @file_get_contents($item->link) !== FALSE)
                                <form action="{{ route('rss.content')}}" method="get">

                                    <input type="hidden" name="title" value="{{$item->title}}">
                                    <input type="hidden" name="link" value="{{$item->link}}">
                                    </br>
                                    <button type="submit" ><h4>{{$item->title}}</h4></button>

                                </form>
                                @php
                                    {{

                                        echo $item->description;
                                    }}
                                @endphp
                            @endif

                        @endforeach
                    @endforeach
                </div>

            </div>

            <div class="col" >
                <h2>Column 2</h2>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!</p>
                <p>Hello World!11</p>

            </div>


        </div>

    </div>






@endsection