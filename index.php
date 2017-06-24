<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>chickenattract</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
      <div class="choose"><img class="icon" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19441323_1701994536495442_378990491_n.png?oh=b2ea185a543991fa8aefde84212d730d&amp;oe=594F5938"/><br/>
        <div class="titlename">Yue</div>
        <div class="buttongroup">
          <div class="button1" v-on:click="all()"> <img class="hsinchu" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19427622_1701994529828776_1046016097_n.png?oh=9c091df3da7a70be90dcd6af05a3c20f&amp;oe=594F34A0"/>
            <div class="buttontitle">全部</div>
          </div>
          <div class="button2" v-on:click="taipei()"> <img class="taipei" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19433400_1701447279883501_598661742_n.png?oh=47ebc1997633188185106e368094ea43&amp;oe=594F2722"/>
            <div class="buttontitle">台北</div>
          </div>
          <div class="button1" v-on:click="hsinchu()"> <img class="hsinchu" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19433400_1701447279883501_598661742_n.png?oh=47ebc1997633188185106e368094ea43&amp;oe=594F2722"/>
            <div class="buttontitle">新竹</div>
          </div>
          <div class="button3"> <img class="about" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19433595_1701995306495365_996125506_n.png?oh=5ef7baa3fc43f4772eefe43b0a77b854&amp;oe=594F551B"/>
            <div class="buttontitle">關於我們</div>
          </div>
        </div>
        <div class="chickenattract">ChickenAttract</div>
      </div>
      <div class="main">
        <div class="navbar"><img class="extra" v-on:click="extra()" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t34.0-12/19427521_1701452719882957_2048126102_n.png?oh=f4734cf9b92ba262a4142a7d398e94da&amp;oe=594ED676"/>
          <div class="title">ChickenAttract</div><img class="button" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19478260_1702689526425943_673351887_n.png?oh=9b3253923781be1594cf7b5c7479b7d4&amp;oe=594F09BE" v-on:click="random()"/>
        </div><img class="taipeitell" src="https://upload.cc/i/3T4jrq.png"/><img class="hsinchutell" src="https://upload.cc/i/1YzEX8.png"/>
        <div class="photos">
          <div class="for" v-for="(id,photo) in photos">
            <div class="block"><img class="photo" v-on:click="content(id)" src="{{photo.url}}"/>
              <div class="love" v-if="photo.love_id==0" v-on:click="love(id)"></div>
              <div class="love1" v-if="photo.love_id==1" v-on:click="love1(id)"></div>
              <div class="store">
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
              <div class="info">Restaurant InFo</div>
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
                  <div class="circle4">
                    <div class="circle44" v-if="circle_id==3"></div>
                  </div>
                </div>
                <div class="smallpics"><img class="smallpic" v-for="(id,food) in photo.others_foods" v-on:click="up(id)" src="{{food}}"/></div>
              </div>
              <div class="word">
                <div class="place">地址 : {{photo.place}}</div>
                <div class="tel">電話 : {{photo.tel}}</div>
                <div class="time">營業時間 : {{photo.time}}</div>
                <div class="menu">菜單 : </div><br/><img src="{{photo.menu}}"/>
              </div>
            </div>
          </div>
        </div>
        <div class="cover" v-on:click="extraback()"></div>
        <div class="footer">
          <div class="block"><img class="gift" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19458479_1701447293216833_430296549_n.png?oh=a05b2e6a317b0e08549e760f5248eb23&amp;oe=594F7360"/></div>
          <div class="block"><img class="location" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19433400_1701447279883501_598661742_n.png?oh=47ebc1997633188185106e368094ea43&amp;oe=594F2722"/></div>
          <div class="block"><img class="tkpic" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19265016_1701447296550166_2145341474_n.png?oh=8901086295517b5917f3fcbaa7e06461&amp;oe=594F2B34"/></div>
          <div class="block"><img class="search" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19458150_1701447286550167_1088643461_n.png?oh=aa08db01e38e02e3e9d973bb47ec112e&amp;oe=594F6CA9"/></div>
          <div class="block"><img class="person" src="https://scontent.ftpe3-1.fna.fbcdn.net/v/t34.0-12/19415860_1701447289883500_1982504568_n.png?oh=539c9244e70939e8cdb2bbff25d4fe6f&amp;oe=594F8EDB"/></div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.js'></script>

    <script src="index.js"></script>

</body>
</html>
