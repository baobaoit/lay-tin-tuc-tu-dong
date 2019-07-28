@extends('layouts.news')
@section('content')
<head>

  
    <link rel="stylesheet" type="text/css" href="https://statictuoitre.mediacdn.vn/web_css/font.2017.11.28.1.min.css" />





</head>
<style>
	img{
		width:400px;
		height:400px;
	}
	.comment-wrapper .form-comment{background-color:rgba(34,34,34,.05);padding:16px}
	.comment-wrapper .form-comment .input-type-text{background-color:#fff;box-shadow:inset 0 1px 3px 0 rgba(0,0,0,.19);border:solid 1px #c89490;height:76px}
	.comment-wrapper .form-comment .send-comment{border-radius:2px;background-color:#e32;color:white;padding:8px 12px;float:left;font-size:13px;margin-top:6px}
	.col1{

		font-size:120%;
	}
	#titlec
	{
		margin-left:10px;
	}
	.number{
		display:none;
	}
	#mainContentDetail{
		margin-left: 10px;
	}
	.input-type-text{border:solid 1px #ebebeb;background-color:#fbfbfb;width:100%;box-sizing:border-box;height:50px;padding:12px;color:#727b88;font:normal 14px/1.29 Roboto;overflow:hidden}
	
</style>

<div class="col1">
 



				    <h1 id ="titlec">{{$title}}</h1>
				 
				    @php
				        print_r($postContent);
				    @endphp
			
			</div>
	</div>

	

		</div>
			<div class="col">
				  @include('rss.col2')
			</div>
@endsection