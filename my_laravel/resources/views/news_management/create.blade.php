@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a infor</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('management.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">NAME OF GENRE:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="rss_url">RSS URL:</label>
                        <input type="text" class="form-control" name="rss_url"/>
                    </div>
                    <div class="form-group">
                        <label for="news_pages_id">ID OF ORIGINAL PAGE:</label>
                        <input type="text" class="form-control" name="news_pages_id"/>
                    </div>

                    <button type="submit" class="btn btn-primary-outline">Add information</button>
                </form>
            </div>
        </div>
    </div>
@endsection

