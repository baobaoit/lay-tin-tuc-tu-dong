
<style>
    .widget1
    {
        height: 450px;
    }
    .widget2
    {
        height:1700px;
    }
    .widget3
    {
        height:300px;
    }

    .widget4
    {
       height:500px;

    }
    .widget5
    {
       height:700px;
    }
    .widget6{
        height:10%;
    }
    hr{
        width:100%;
        background-color:red;
    }
    .rss{
        float:left;
        margin-left:10px;
        

    }
    #tile{
        font-weight: bold;
        font-size:120%;
        text-align: center;
    }
    #GV{
          text-align: center;
           font-size:120%;
    }
    #gr{
         font-weight: bold;
        font-size:120%;
        text-align: center;
    }
    #nameGV{
        font-weight: bold;
        font-size:120%;
        text-align: center;
    }
    .label{
      color: black !important
    }
    #h1t{
        margin-left:10px;
    }
    #logows{
        margin-left:23%;
    }
    #tv{
          font-weight: bold;
        font-size:120%;
        text-align: center;
    }
    #info{
        font-weight: bold;
        font-size:120%;
        text-align: center;
    }
    .spotlight{
        width:200px;
        height:200px;
        margin-left:23%;
    }
    iframe{
        margin-left:10%;
    }
    h2{
        text-align: center;
    }
    #qc{
        width:300px;  
        height:250px;
        margin-left:10%;
    }
</style>


                <div class="widget1">
                <p id ="tile">Chủ đề lấy tin tức tự động bằng RSS </p>
                <p id="gr">Trường đại học Mở TPHCM </p>
                <img id="logows" src="https://upload.wikimedia.org/wikipedia/vi/thumb/2/28/Logo_DH_MO.png/1200px-Logo_DH_MO.png"><br></br>
                <p id ="GV"> Giảng viên hướng dẫn đề tài </p>
                <p id ="nameGV">Thầy: ThS. Lưu Quang Phương </p>
                </div>
                <hr></hr>
                <div class="widget2">
                  
                    <p id ="tv">Thành viên của nhóm  </p>
                    <marquee   direction="up" behavior="slide" style="border:blue 2px solid" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="30" >
                    <img class="spotlight" aria-busy="false" src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.0-9/19732040_1523440727695530_3099650468057138855_n.jpg?_nc_cat=110&amp;_nc_oc=AQnoQm3SJ0vQGXkl96qaiDOBk7M1qv0ZliP4x8IBxkYpoD1q7uHpHSnk2S1-AZd-Hhs&amp;_nc_ht=scontent.fsgn2-3.fna&amp;oh=46edc997aafc88dbe2adfff4fad9d43a&amp;oe=5DEC7A7C" >
                    <p id="info">MSSV: 1551010009 <br>
                        Họ và tên: Lê Hoàng Quốc Bảo <br>
                        Công việc: Trưởng nhóm 
                    </p>
                  <img class="spotlight" aria-busy="false" src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-9/66776731_1650994118377267_8926147410774720512_n.jpg?_nc_cat=101&amp;_nc_oc=AQlSwIgMQ23guTpyLOPEos1tl4BxLD-CQZRiG-E8qEgg3NcYsKT8pTFbJjufTMnBhos&amp;_nc_ht=scontent.fsgn2-4.fna&amp;oh=74e085f331ba8f132589efc2ee925a25&amp;oe=5DA60100">
                    <p id="info">MSSV: 1551010060 <br>
                        Họ và tên: Lê Tuấn Long <br>
                        Công việc: Thiết kế và xử lý UI 
                    </p>
                    <img class="spotlight"  src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-9/23031168_321139921693723_1451511014995460644_n.jpg?_nc_cat=103&amp;_nc_oc=AQnm9on5g1bCXpwAfcoH49gO_FyvOYGr30R-wCye9_HBOrqTB1Fhji5JLpK2gVBJUww&amp;_nc_ht=scontent.fsgn2-4.fna&amp;oh=bab4a8cc579ceb4b44beacf79ddddfdd&amp;oe=5DA52864" >
                      <p id="info">MSSV: 1551010092 <br>
                        Họ và tên: Lê Hữu Nhị <br>
                        Công việc: Xây dựng API và xử lý RSS
                    </p>
                    <img class="spotlight" alt=" Nguyễn Anh Tuấn" aria-busy="false" src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-9/1509894_532599570234992_4575848048086139676_n.jpg?_nc_cat=101&amp;_nc_oc=AQnqU_vOnLzGmTuYXPzPW7t2MM7zvueyhV2yT7zRIgLZd6Xnr-rzZvqLQVcjPJbblHY&amp;_nc_ht=scontent.fsgn2-4.fna&amp;oh=71625be771fa57db1266891f5f73f925&amp;oe=5DEAF404">
                    <p id="info">MSSV: 1551010142 <br>
                        Họ và tên: Nguyễn Anh Tuấn <br>
                        Công việc: Tester và viết báo cáo 
                    </p>
                    <?php 
                    
                    use Illuminate\Routing\UrlGenerator;

                    $currentUrl = url()->current();
                    $isIncludeRssContent = strpos($currentUrl, '/rss/content') !== false;
                    $imageSrc = $isIncludeRssContent ? '../anh.jpg' : 'anh.jpg';

                    ?>
                    <img class="spotlight" src="<?= $imageSrc ?>" aria-busy="true">
                      <p id="info">MSSV: 1551010086 <br>
                        Họ và tên: Lê Thành Nhân  <br>
                        Công việc: Viết báo cáo 
                    </p>
                </marquee>
                </div>
                 <hr></hr>
                <div class="widget3">
                    <h2>Label</h2>
                   <ul>
                    <li > <a class="label" href="{{ route('news.thoisu')}}"> Thời sự </a> </li>
                    <li> <a class="label" href="{{ route('news.kinhdoanh')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-9ffcc168-f4e8-d8a0-a642-1bf67e2775fc">Kinh doanh</a> </li>
                    <li> <a class="label" href="{{ route('news.thethao')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-63ce2056-c145-203e-c930-5dbb044bc664">Thể thao</a> </li>
                    <li> <a class="label" href="{{ route('news.thegioi')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-fa56d3d0-a070-c8b9-0851-aa7231d3ee88"> Thế giới </a> </li>
                    <li> <a class="label" href="{{ route('news.phapluat')}}" class=" nav-link d-inline-block text-uppercase font-weight-bold" id="navbarDropdown-6adcec70-bb8b-0013-afb2-5c69cf8a5243">Pháp luật</a> </li>


                </ul>
                </div>
                 <hr></hr>
                  <div class="widget4">
                    <h2>U22 VS Curacao </h2>
                    <iframe width="300" height="315" src="https://www.youtube.com/embed/xPYIJGaZylo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                   <hr></hr>
                 <div class="widget5">
                    <h2>List nhạc thư giản</h2>
                    <iframe src="https://www.nhaccuatui.com/lh/auto/kr9KYNtkzmnA" width="300px" height="600px" frameborder="0" allowfullscreen></iframe>
                </div>
                <hr></hr>
                 <div class="widget6">
                    <h2>Image</h2>
                  <img id="qc" src="//baomoi-static.zadn.vn/events/banner_hcm_02-min.png"  alt="Học tập và làm theo tấm gương đạo đức Hồ Chí Minh">
                </div>
            </div>
