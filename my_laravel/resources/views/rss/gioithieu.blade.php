@extends('layouts.news')
@section('content')
<style>
.help-box{
    background-color:#ffffff;

    margin-left:30%;
    width:600px;
    height:600px;
    line-height: 26px;
    
}
.help__inner{
    border:solid 4px lightblue;
    border-radius:10px;
      margin-bottom: 2%;
}
.help__title{
    color:#990000;
    text-align: center;
}
strong{
    
}
p{
    text-align: left;
    margin-left:4%;
    font-size: 120%;
    font-weight: bold;

}
#author{
    margin-left: 70%;
    font-size: 140%;


}
#name{
    margin-left: 72%;
    font-size: 100%;
    text-align: center;

}
h4{
    margin-left: 4%;
}
li{
      font-size: 120%;
}

</style>
<marquee id="marq" style="border:blue 2px solid"  scrollamount="10"   scrolldelay="0" behavior="slide" onmouseover="this.stop()" onmouseout="this.start()">Chào mừng các bạn đến với trang giới thiệu thông tin của website Lacai.com. Rất hân hạnh nâng cao tri thức và là 1 nơi tin tức đáng tin cậy nhất Việt Nam!!</marquee>
<div class="help-box">
        <div class="help__inner">
            <h3 class="help__title"><i class="spr spr-info"></i><span>Giới thiệu LACAI.COM</span></h3>

            <div class="detail">
                <p>
<strong>Lacai</strong>-cái tên nói lên tất cả, là một website tổng hợp thông tin tiếng Việt hoàn toàn không đáng tin cậy và không chính thống. Mỗi ngày gần 6500 tin tức từ gần 200 nguồn của các báo điện tử và trang tin điện tử Việt Nam được <strong>Lacai</strong> tự động tổng hợp, phân loại, phát hiện các bài đăng lại, nhóm các bài viết liên quan và hiển thị theo sở thích đọc tin của từng độc giả.</p>
<h4 class="main-feature">Các tính năng chính</h4>
<ol style="list-style-type: lower-roman;">
    <li><strong>Phân loại nội dung</strong>: Hệ thống tự động phân tích nội dung các tin tức và phân loại vào chuyên mục thích hợp.</li>
    <li><strong>Phát hiện bài trùng lặp</strong>: Hệ thống tự động phát hiện các bài đăng lại (copy) và nhóm chúng lại về bài nội dung gốc.</li>
    <li><strong>Nhóm các bài liên quan</strong>: Hệ thống tự động phát hiện các bài liên quan (không phải là copy) về cùng một chủ đề nào đó.</li>
    <strong id="author">Author</strong>
    <strong id="name"> FC OU</strong>
</ol>
            </div>
        </div>
    </div>
@endsection
