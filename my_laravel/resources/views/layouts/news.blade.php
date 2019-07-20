<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=vietnamese" rel="stylesheet"> <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg">
    <ul>

        <section >
            <li id="logod"><a href="{{ route('news.index')}}" title="Trường đại học Mở Thành Phố Hồ Chí Minh" class="logo d-flex">Trường đại học Mở Thành Phố Hồ Chí Minh</a></li>
            </tr>
            </div>
        </section>
        </li>
    </ul>
    <table id="nav">
        <tr>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <td><a class="nav-link" href="{{ route('rss.gioithieu')}}">Giới hiệu<span class="sr-only">(current)</span></a></td>

                    </td>
                </li>
            </ul>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <td><a class="nav-link" href="#">Quảng cáo<span class="sr-only">(current)</span></a></td>
                    </li>
                    <li class="nav-item active">
                        <td><a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a></td>
                    </li>

                    <li class="nav-item active">

                    </li>

                </ul>
        </tr>
        </div>
    </table>

</nav>
</hr>
<div id="row" class="row">
    <ul id="main-top-nav" class="d-flex align-items-center px-0 w-100">
        <li class="m-auto nav-item position-relative d-inline-block active">
            <a href="{{ route('news.index')}}" class="nav-link text-uppercase font-weight-bold"> <img id="iconhome" src="https://assets.nguoiduatin.vn/images/icon-home.png"> </a>
        </li>
        <li class="f-rsb m-auto nav-item position-relative d-inline-block "> <a href="{{ route('news.thoisu')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-62f2410f-54e8-af97-adfc-6372097eb885"> Thời sự </a> </li>
        <li class="f-rsb m-auto nav-item position-relative d-inline-block "> <a href="{{ route('news.kinhdoanh')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-9ffcc168-f4e8-d8a0-a642-1bf67e2775fc">Kinh doanh</a> </li>
        <li class="f-rsb m-auto nav-item position-relative d-inline-block "> <a href="{{ route('news.thethao')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-63ce2056-c145-203e-c930-5dbb044bc664">Thể thao</a> </li>
        <li class="f-rsb m-auto nav-item position-relative d-inline-block "> <a href="{{ route('news.thegioi')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-fa56d3d0-a070-c8b9-0851-aa7231d3ee88"> Thế giới </a> </li>
        <li class="f-rsb m-auto nav-item position-relative d-inline-block "> <a href="{{ route('news.phapluat')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-6adcec70-bb8b-0013-afb2-5c69cf8a5243">Pháp luật</a> </li>


    </ul>
</div>
@yield('content')
<style>
    footer{
        border-top: 5px solid #333;
        color: white;
        font-size:15px;
        font-weight: bold;
        height: 20%;

        bottom: 0;
        left: 0;
        width: 100%;
        text-justify:auto;
        text-align: center;
        background-color:  #660000;
    }
    .logof{
        background-image:url('http://ou.edu.vn/wp-content/uploads/2016/08/Logo.png');
        background-repeat:no-repeat;
        background-size:contain;
        height:100%;
        padding:7%;
        text-indent: -9999px;
        color: white;
        width:600px;

    }

    #abc{
        text-decoration: blink;
    }

</style>

<footer id="sticky-footer" >
    <div class="container text-center">
        <!-- Copyright -->
        <div class="container text-center">
            <table id="table">
                <tr>
                    <th colspan="2"><a href="/layout/content.php" class="logof d-flex"></a></th><th></th>
                    <td id="abc">Trường Đại học Mở thành phố Hồ Chí Minh đóng góp và nâng cao tri thức cho cộng đồng bằng các phương thức linh hoạt và thuận tiện nhất</td>
                </tr>
            </table>
        </div>
        <!-- Copyright -->
    </div>
</footer>

</div>

</body>
</html>
