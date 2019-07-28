@extends('layouts.news')

@section('content')
 <div id="content">
    <div class="col1">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
         
                    Sorry, an error has occured, Requested page not found!
             
                <div class="error-actions">
                    <a href="{{ route('news.index')}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
  
    <div class="col">
        @include('rss.col2')
    </div>
</div>
</div>
<style>
    .error-template {padding: 40px 15px;text-align: center;}
    .error-actions {margin-top:15px;margin-bottom:15px;}
    .error-actions .btn { margin-right:10px; }
</style>
@endsection
