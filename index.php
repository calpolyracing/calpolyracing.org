<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Cal Poly Racing</title>
   <link rel="stylesheet" type="text/css" href="css/reset.css">
   <link href="https://fonts.googleapis.com/icon?family=Roboto|Material+Icons" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/global.css">
   <link rel="stylesheet" type="text/css" href="css/fader.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript" defer></script>
   <script type="text/javascript" src="js/fader.js"></script>
   <!--<script src="js/velocity.min.js" type="text/javascript" defer></script>-->
   <script type="text/javascript" src="js/smoothscroll.js" defer></script>
   <?php include_once("analyticstracking.php") ?>
   <script>
   window.onload = function () {
      var target = $("#news").offset().top;
      var interval = setInterval(function() {
         if ($(window).scrollTop() >= target-10) {
            $("header").addClass("shrink");
         }
         else {
            $("header").removeClass("shrink");
         }
      }, 150);
      
      var centerFillImage = function () {
         var imgs = $('.imgCenterFill .fillTarget');
         console.log(imgs.length);
         imgs.each(function (i) {
            var canvasWidth = $(this).parent().width();
            var canvasHeight = $(this).parent().height();

            var maxRatio = Math.max(canvasWidth / $(this).width(), canvasHeight / $(this).height());
            var newImgWidth = maxRatio * $(this).width();
            var newImgHeight = maxRatio * $(this).height();

            var newImgX = (canvasWidth - newImgWidth) / 2;
            var newImgY = (canvasHeight - newImgHeight) / 2;
            $(this).css({
               'position': 'absolute',
               'left': newImgX,
               'top': newImgY,
               'width': newImgWidth,
               'height': newImgHeight
            });
         });
      };
      
      var centerFitImage = function () {
         var imgs = $('.imgCenterFit .fitTarget');
         imgs.each(function (i) {
            var canvasWidth = $(this).parent().width();
            var canvasHeight = $(this).parent().height();
            
            console.log("w: " + canvasWidth);
            console.log("h: " + canvasHeight);

            var minRatio = Math.min(canvasWidth / $(this).width(), canvasHeight / $(this).height());
            var newImgWidth = minRatio * $(this).width();
            var newImgHeight = minRatio * $(this).height();
            
            console.log("r: " + minRatio);
            console.log("nw: " + newImgWidth);
            console.log("nh: " + newImgHeight);

            var newImgX = (canvasWidth - newImgWidth) / 2;
            var newImgY = (canvasHeight - newImgHeight) / 2;
            $(this).css({
               'position': 'absolute',
               'left': newImgX,
               'top': newImgY,
               'width': newImgWidth,
               'height': newImgHeight
            });
         });
      };
      
      centerFillImage();
      $(window).resize(centerFillImage);
      centerFitImage();
      $(window).resize(centerFitImage);
      
      beginFade();
   };

   function shift(item, vec) {
      if (vec.search("vw")) {
         vec = parseInt(vec) * (window.innerWidth / 100); /*100vw = innerWidth px*/
      }
      
      /*$(item).velocity({
         left: "+=" + vec
         }, 1000, function() {
         // Animation complete.
      });*/

      $(item).css({
         'position': 'relative',
         'transition': 'all 1.3s linear',
         'left': '+=' + vec
      });
   };
   </script>
</head>
<body>

   <div id="fb-root"></div>
   <script defer>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));</script>

   <header>
      <a class="logo smoothScroll" href="#home"><img src="img/CPRacingSLO-WB.png"></a>
      <div class="nav">
         <a class="btn1 smoothScroll" href="#news">News</a>
         <a class="btn1 smoothScroll" href="#about">About</a>
         <a class="btn1 smoothScroll" href="#teams">The Teams</a>
         <a class="btn1 smoothScroll" href="#partners">Partners</a>
      </div>
   </header>

   <div id="home" class="enc">
      <div class="fader">
         <div class="imgCenterFill imgCenterFit">
            <img class="fillTarget" src="img/baja_sunset.jpg" style="top:-100px;">
            <a href="http://www.calpolyracing.org/joinbaja" target="_blank" class="onImgCaption">
               <p>Click here to join our Baja SAE team!</p>
            </a>
         </div>
         <div class="opaque imgCenterFill imgCenterFit">
            <img class="fillTarget" src="img/formula_h1_rocks.jpg" style="top:-100px;">
            <a href="http://www.calpolyracing.org/joinfsae" target="_blank" class="onImgCaption">
               <p>Click here to join our Formula SAE team!</p>
            </a>
         </div>
         <div class="imgCenterFill imgCenterFit">
            <img class="fillTarget" src="img/formula_mi_pass.jpg" style="top:-100px;">
            <a href="http://www.calpolyracing.org/learnmore" target="_blank" class="onImgCaption">
               <p>No preference? Find out more about joining our teams by clicking here!</p>
            </a>
         </div>
      </div>
   </div>

   <div id="news" class="enc">
      <div class="enc_title"><h1>News</h1></div>
      <div style="width: 500px; height: 700px; display: inherit; margin: 0 auto;" class="fb-page" data-href="http://www.facebook.com/calpolyracing" 
         data-width="500px" data-height="700px" data-show-facepile="false" data-show-posts="true">
      </div>
      <div style="clear: both;"></div>
   </div>

   <div id="about" class="enc">
      <div class="enc_title"><h1>About</h1></div>
      <div style="padding-top: 50px;"><p style="text-align: center; color: #999;">Cal Poly Racing is California’s largest student chapter of the Society of Automotive Engineers (SAE). Our team is composed of over eighty active members, and each year we design, manufacture, test, and compete with three innovative race vehicles as participants in the SAE Collegiate Design Series. This series challenges university students from around the world to apply their skills outside of the classroom as part of a project that closely imitates industry practices. Cal Poly Racing is the only team in California that fields vehicles in all three of the series’ major competitions: Formula SAE, Formula SAE Electric, and Baja SAE.<br>
      <br>
      At the competitions, our vehicles are evaluated by industry experts not only for their performance characteristics and incorporation of innovative designs, but also for their potential as production items. Because of this, we are more than just a team of engineers. Cal Poly Racing is composed of students from various disciplines who function together as a business. This enables our members to practice project management, finance, and marketing in addition to engineering. The experience and skills developed by members of our team cannot be acquired in any other university setting, and this gives us unparalleled preparation for success in our careers.<br>
      <br>
      To meet our ambitious competition goals each year, Cal Poly Racing requires the generous support of industry partners for materials and services. We seek to develop mutually beneficial relationships with our partners, who choose to contribute materials, knowledge, services, or other forms of support. In return, we offer partners increased brand recognition and networking opportunities with our talented student members.</p></div>
   </div>

   <div id="teams" class="enc">
      <div class="enc_title"><h1>The Teams</h1></div>
      <div style="padding-top: 200px;"><p style="text-align: center; color: #999;">Coming soon...</p></div>
      <!--<div class="enc_content x3">
         <div class="enc_content_panel">
            <div class="panel_menu">
               <a class="panel_menu_button">Overview</a>
               <a class="panel_menu_button">Team</a>
               <a class="panel_menu_button">Cars</a>
               <a class="panel_menu_button">Competitions</a>
            </div>
            <div class="panel_content">

            </div>
            <a class="panel_shifter" href="javascript:void(0);" onclick="shift($(this).parent().parent(), '-100vw')">
               <i class="material-icons md-48 md-light">keyboard_arrow_right</i>
            </a>
         </div>
         <div class="enc_content_panel flexSA">
            <a class="imgButton imgCenterFill imgCenterFit" href="javascript:void(0);" onclick="shift($(this).parent().parent(), '100vw')">
               <img class="fillTarget imgButtonBg" src="img/baja_sunset_lr.jpg">
               <img class="fitTarget imgButtonFg" src="img/Baja SAE Mark White.png">
            </a>
            <a class="imgButton imgCenterFill imgCenterFit" href="javascript:void(0);" onclick="shift($(this).parent().parent(), '-100vw')">
               <img class="fillTarget imgButtonBg" src="img/formula_h1_rocks_lr.jpg">
               <img class="fitTarget imgButtonFg" src="img/Formula SAE Mark White.png">
            </a>
         </div>
         <div class="enc_content_panel">
            <a class="panel_shifter" href="javascript:void(0);" onclick="shift($(this).parent().parent(), '100vw')">
               <i class="material-icons md-48 md-light">keyboard_arrow_left</i>
            </a>
            
         </div>
      </div>-->
   </div>

   <div id="partners" class="enc">
      <div class="enc_title"><h1>Partners</h1></div>
      <div style="padding-top: 200px;"><p style="text-align: center; color: #999;">Coming soon...</p></div>
      <!--<div class="enc_content_panel">
         <div class="partner_row" id="partner_text">
            <p>Cal Poly Racing would not be able to succeed each year without the generous support of our partners.</p>
         </div>
         <div class="partner_row" id="mustang">
            <span class="partner"><img src="img/partners/Cal-Poly-ME.png"></span>
            <span class="partner"><img src="img/partners/Next-Intent.png"></span>
            <span class="partner"><img src="img/partners/TenCate.png"></span>
         </div>
         <div class="partner_row" id="platinum">
            <span class="partner"><img src="img/partners/SolidWorks.png"></span>
            <span class="partner"><img src="img/partners/Charisma-Design-Studio.png"></span>
         </div>
         <div class="partner_row" id="gold">
            <span class="partner"><img src="img/partners/MESFAC.png"></span>
            <span class="partner"><img src="img/partners/AERO-SFC.png"></span>
            <span class="partner"><img src="img/partners/Rounds-Family.png"></span>
            <span class="partner"><img src="img/partners/Powell-Family.png"></span>
            <span class="partner"><img src="img/partners/Andrew-Cunningham.png"></span>
            <span class="partner"><img src="img/partners/Airtech-International.png"></span>
            <span class="partner"><img src="img/partners/Buttonwillow-Raceway-Park.png"></span>
            <span class="partner"><img src="img/partners/C&D-Zodiac.png"></span>
            <span class="partner"><img src="img/partners/DASA-Racing.png"></span>
            <span class="partner"><img src="img/partners/Graves-Motorsports.png"></span>
            <span class="partner"><img src="img/partners/SpaceX.png"></span>
            <span class="partner"><img src="img/partners/Toray.png"></span>
            <span class="partner"><img src="img/partners/VE-Signs.png"></span>
         </div>
         <div class="partner_row" id="silver">
            <span class="partner"><img src="img/partners/McDowell-Family.png"></span>
            <span class="partner"><img src="img/partners/Orange-County-Broaching.png"></span>
            <span class="partner"><img src="img/partners/Advance-Adapters.png"></span>
            <span class="partner"><img src="img/partners/BMRS-Hoses-and-Fittings.png"></span>
            <span class="partner"><img src="img/partners/Calspan.png"></span>
            <span class="partner"><img src="img/partners/Hoosier.png"></span>
            <span class="partner"><img src="img/partners/Marketing-Masters.png"></span>
            <span class="partner"><img src="img/partners/Plascore.png"></span>
            <span class="partner"><img src="img/partners/SKF.png"></span>
         </div>
         <div class="partner_row" id="bronze">
            <span class="partner"><img src="img/partners/General-Grinding.png"></span>
            <span class="partner"><img src="img/partners/Strom-Motorsports.png"></span>
            <span class="partner"><img src="img/partners/DJI.png"></span>
            <span class="partner"><img src="img/partners/General-Sealants.png"></span>
            <span class="partner"><img src="img/partners/Bender.png"></span>
            <span class="partner"><img src="img/partners/VPG-Micro-Measurements.png"></span>
            <span class="partner"><img src="img/partners/Advanced-Circuits.png"></span>
            <span class="partner"><img src="img/partners/Mechanix.png"></span>
            <span class="partner"><img src="img/partners/Thermo-Fusion.png"></span>
            <span class="partner"><img src="img/partners/The-Tire-Store.png"></span>
            <span class="partner"><img src="img/partners/Veracity.png"></span>
         </div>
      </div>-->
   </div>

</body>
</html>