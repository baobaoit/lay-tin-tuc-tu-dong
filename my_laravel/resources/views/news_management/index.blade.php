@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>

    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div>
        <a style="margin: 19px;" href="{{ route('management.create')}}" class="btn btn-primary">New News</a>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">News Management</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>NAME OF GENRE</td>
                    <td>RSS URL</td>
                    <td>ID OF ORIGINAL PAGE</td>
                    <td colspan = 2>ACTIONS</td>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->rss_url}}</td>
                        <td>{{$item->news_pages_id}}</td>
                        <td>
                            <a href="{{ route('management.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('management.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection