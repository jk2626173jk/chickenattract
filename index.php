<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>chickenattrac-拾嗑</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta property="og:title" content="ChickenAttract-拾嗑" >
<meta property="og:url" content="https://chickenattract.herokuapp.com/">
<meta property="og:image" content="https://upload.cc/i/OAPi5I.png">
<meta property="og:description" content="我們是一群熱愛美食與攝影的九十後，致力於用美食圖片讓世界變得繽紛有趣，'拾嗑'是用實拍美食圖來選餐廳的應用程式，免費、直觀且簡單，讓你不用再為了午餐、晚餐吃甚麼而煩惱！
" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Francois+One|Marck+Script|Source+Sans+Pro'>

      <link rel="stylesheet" href="style.css">

  
</head>

<body>
  
<div id="app1">
  <div class="container">
    <div class="group">
      <div class="choose"><img class="icon" src="https://upload.cc/i/FlwJTs.png"/><br/>
        <div class="titlename">林展逸</div>
        <div class="buttongroup">
          <div class="button1top" v-on:click="all()"> <img class="hsinchu" src="https://upload.cc/i/t3amfV.png"/>
            <div class="buttontitle">全部</div>
          </div>
          <div class="button2top" v-on:click="taipei()"> <img class="taipei" src="https://upload.cc/i/P0cqm8.png"/>
            <div class="buttontitle">台北</div>
          </div>
          <div class="button1top" v-on:click="hsinchu()"> <img class="hsinchu" src="https://upload.cc/i/P0cqm8.png"/>
            <div class="buttontitle">新竹</div>
          </div>
          <div class="button3top"> <img class="about" src="https://upload.cc/i/BWdTjb.png"/>
            <div class="buttontitle">關於我們</div>
          </div>
        </div>
        <div class="chickenattract">ChickenAttract</div>
      </div>
      <div class="main">
        <div class="white"></div>
        <div class="navbar"><img class="extra" v-on:click="extra()" src="https://upload.cc/i/OjWEz3.png"/><img class="title" src="https://upload.cc/i/5OToyW.png" v-if="all_flag==1"/>
          <div class="titleword" v-if="taipei_flag==1">台北</div>
          <div class="titleword" v-if="hsinchu_flag==1">新竹</div><img class="buttonr" src="https://upload.cc/i/TJBHYI.png" v-on:click="alert()"/>
        </div>
        <div class="distancebar">
          <div class="button1" v-on:click="walk()">走路15分鐘內</div>
          <div class="button2" v-on:click="mot1()">騎/開車15分鐘內</div>
          <div class="button3" v-on:click="mot2()">騎/開車30分鐘內</div>
        </div><img class="taipeitell" src="https://upload.cc/i/b6GYUi.png"/><img class="hsinchutell" src="https://upload.cc/i/XePQUN.png"/><img class="logo" src="https://upload.cc/i/Ssxn1I.png" v-on:click="alertrandom" v-if="(taipei_flag==1)||(hsinchu_flag==1)"/>
        <div class="photos">
          <div class="for" v-for="(id,photo) in photos">
            <div class="block"><img class="photo" v-on:click="content(id)" src="{{photo.others_foods[0]}}"/>
              <div class="love" v-if="photo.love_id==0&amp;&amp;id!=0" v-on:click="love(id)"></div>
              <div class="love1" v-if="photo.love_id==1&amp;&amp;id!=0" v-on:click="love1(id)"></div>
              <div class="love first" v-if="photo.love_id==0&amp;&amp;id==0" v-on:click="love(id)"></div>
              <div class="love1 first" v-if="photo.love_id==1&amp;&amp;id==0" v-on:click="love1(id)"></div>
              <div class="store" v-if="id!=(photos.length-1)">
                <div class="storename">{{photo.storename}}</div>
                <div class="see" v-on:click="content(id)">查看更多</div>
              </div>
              <div class="store last" v-if="id==(photos.length-1)">
                <div class="storename">{{photo.storename}}</div>
                <div class="see" v-on:click="content(id)">查看更多</div>
              </div>
            </div>
            <div class="content" v-if="id==content_id">
              <div class="top">
                <div class="back" v-on:click="back()"><</div>
                <div class="storename">{{photo.storename}}</div>
              </div>
              <div class="line"></div>
              <div class="info"> 
                <div class="info1">餐廳資訊</div>
                <div class="info2">評分(18)</div>
              </div>
              <div class="contentphotos">
                <div class="toppics"><img class="toppic" v-for="(id,food) in photo.others_foods" v-on:click="looks(id)" src="{{food}}"/></div>
                <div class="circles">
                  <div class="circle1">
                    <div class="circle11" v-if="circle_id==0"></div>
                  </div>
                  <div class="circle2">
                    <div class="circle22" v-if="circle_id==1"></div>
                  </div>
                  <div class="circle3">
                    <div class="circle33" v-if="circle_id==2"></div>
                  </div>
                  <div class="circle4" v-if="id_length==4">
                    <div class="circle44" v-if="circle_id==3"></div>
                  </div>
                </div>
                <div class="smallpics"><img class="smallpic" v-for="(id,food) in photo.others_foods" v-on:click="up(id)" src="{{food}}"/></div>
              </div>
              <div class="word">
                <div class="place">地址 : {{photo.place}} 
                  <div class="distance" v-on:click="distance()">與您的距離</div>
                </div>
                <div class="tel">電話 : {{photo.tel}}</div>
                <div class="time">營業時間 : {{photo.time}}</div>
                <div class="menu" id="menu">菜單 : </div><br/><img src="{{photo.menu}}"/>
              </div>
              <div class="alert2">
                <div class="title">感謝您喜歡我們這個功能</div>
                <div class="title">我們正在加緊研發中</div>
                <div class="title">如果您希望第一時間得知研發資訊</div>
                <div class="title">請留下您的email</div><br/>
                <div class="title">您前方已經有27人留下資訊</div><br/>
                <div class="buttonalert" v-on:click="noregister2()">現在還不要</div>
                <div class="buttonalert" v-on:click="noregister()" href="https://www.surveycake.com/s/v2aBw#sthash.B4YT2y2r.dpuf" target="blank">註冊留下資訊 </div>
              </div>
              <div class="distancealert">
                <div class="title wait">請稍後~我們正在偵測您的位置......</div>
                <div class="title nowait">您現在正位於 台北市中正區徐州路2號 臺大醫院國際會議中心</div>
                <div class="title nowait">此餐廳與您的距離有 {{photo.distance}}</div>
                <div class="title nowait">走路: {{photo.walk_distance}}</div>
                <div class="title nowait">騎車: {{photo.mot_distance}}</div>
                <div class="buttonalert nowaitbtn" v-on:click="waitcheck()">我知道了</div>
              </div>
            </div>
          </div>
        </div>
        <div class="cover" v-on:click="extraback()"></div>
        <div class="alertall">
          <div class="title">想要抽卡嗎?</div>
          <div class="title">請先選擇地區吧~</div>
          <div class="buttonalertall" v-on:click="noregisterall()">我知道了</div>
        </div>
        <div class="alertrandom">
          <div class="title">還不知道要吃什麼嗎?</div>
          <div class="title">就由我們幫您決定</div><br/>
          <div class="buttonalertrandom" v-on:click="random()">就吃這間</div>
        </div>
        <div class="distancealertout">
          <div class="title wait">請稍後~我們正在偵測您的位置......</div>
          <div class="title nowait">您現在正位於 台北市中正區徐州路2號 臺大醫院國際會議中心</div>
          <div class="buttonalert nowaitbtn" v-on:click="distancechoose()">我知道了</div>
        </div>
        <div class="alert1">
          <div class="title">感謝您喜歡我們這個功能</div>
          <div class="title">我們正在加緊研發中</div>
          <div class="title">如果您希望第一時間得知研發資訊</div>
          <div class="title">請留下您的email</div><br/>
          <div class="title">您前方已經有27人留下資訊</div><br/>
          <div class="buttonalert" v-on:click="noregister()">現在還不要</div><a class="buttonalert" v-on:click="noregister()" href="https://www.surveycake.com/s/v2aBw#sthash.B4YT2y2r.dpuf" target="blank">註冊留下資訊 </a>
        </div>
        <div class="footer" v-if="content_flag==0"><a class="block" href="https://gift624.herokuapp.com/"><img class="gift" src="https://upload.cc/i/Cjlr56.png"/></a>
          <div class="block" v-on:click="distanceout()" v-if="(taipei_flag==1)||(all_flag==1)"><img class="location" src="https://upload.cc/i/ma4gRD.png"/></div>
          <div class="block" v-on:click="alert()" v-if="hsinchu_flag==1"><img class="location" src="https://upload.cc/i/ma4gRD.png"/></div>
          <div class="block" v-on:click="alert()"><img class="tkpic" src="https://upload.cc/i/21zfgj.png"/></div>
          <div class="block" v-on:click="alertall()" v-if="all_flag==1"><img class="search" id="search" src="https://upload.cc/i/5q9Imr.png"/></div>
          <div class="block" v-on:click="alertrandomtop()" v-if="all_flag!=1"><img class="search" id="search" src="https://upload.cc/i/5q9Imr.png"/></div><a class="block" href="https://person624.herokuapp.com/"><img class="person" src="https://upload.cc/i/RzTFog.png"/></a>
        </div>
        <div class="contentfooter" v-if="content_flag==1">
          <div class="contentblock" v-on:click="alert2()"><img class="call" src="https://upload.cc/i/oHXNeM.png"/><br/>
            <div class="contentfootertitlecall">撥打</div>
          </div>
          <div class="contentblock" v-on:click="alert2()"><img class="contentlocation" src="https://upload.cc/i/td5C0F.png"/><br/>
            <div class="contentfootertitle">地圖</div>
          </div>
          <div class="contentblock" v-on:click="alert2()"><img class="contentcomment" src="https://upload.cc/i/hXUEqe.png"/><br/>
            <div class="contentfootertitle">11則評論</div>
          </div><a class="contentblock" v-on:click="menu()"><img class="contentperson" src="https://upload.cc/i/lupx29.png"/><br/>
            <div class="contentfootertitle">菜單</div></a>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.js'></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101869943-1', 'auto');
  ga('send', 'pageview');

</script>
    <script src="index.js"></script>

</body>
</html>
