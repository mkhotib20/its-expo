<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Salam seni, ilmu, dan budaya!">
    <meta name="author" content="Web Apps ITS Expo 2017">

    <title>ITS EXPO 2017</title>

    <link rel="icon" href="homepage/images/favicon.png"/>
    <link href="homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="homepage/newcss/style.css" rel="stylesheet">
    <style type="text/css">
    	#loader {
		  position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		}

		.animate-bottom {
		  position: relative;
		  -webkit-animation-name: animatebottom;
		  -webkit-animation-duration: 1s;
		  animation-name: animatebottom;
		  animation-duration: 1s
		}

		@-webkit-keyframes animatebottom {
		  from { bottom:-100px; opacity:0 } 
		  to { bottom:0px; opacity:1 }
		}

		@keyframes animatebottom { 
		  from{ bottom:-100px; opacity:0 } 
		  to{ bottom:0; opacity:1 }
		}

		#myDiv {
		  display: none;
		}
    </style>
    <style type="text/css">
   @import url('https://fonts.googleapis.com/css?family=Lato');
    *{
    	font-family: "Lato";
    }
    	#cf {
		  position:relative;
		}

		#cf img {
		  position:absolute;
		  height:200px;
		  -webkit-transition: opacity 0.5s ease-in-out;
		  -moz-transition: opacity 0.5s ease-in-out;
		  -o-transition: opacity 0.5s ease-in-out;
		  transition: opacity 0.5s ease-in-out;
		}

		#cf img.top:hover {
		  height:200px;
		  opacity:0;
		}
		@media only screen and (max-device-width: 480px){
			#cf {
			  position:relative;
			  margin-bottom: 200px;
			}

			#cf img {
			  position:absolute;
			  height:200px;
			  margin-bottom: 200px;
			  -webkit-transition: opacity 0.5s ease-in-out;
			  -moz-transition: opacity 0.5s ease-in-out;
			  -o-transition: opacity 0.5s ease-in-out;
			  transition: opacity 0.5s ease-in-out;
			}

			#cf img.top:hover {
			  height:200px;
			  opacity:0;
			  margin-bottom: 200px;
			}
			}
		@media only screen and (max-device-width: 768px){
		@media only screen and (min-device-width: 480px){
		#navigasi{
			width: 900px;
		}#besar{
			width: 900px;
		}
		}
	}
  </style>
  <script src="homepage/vendor/jquery/jssor.slider-26.1.5.min.js" type="text/javascript"></script>
  <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $Align: 390,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            var jssor_2_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $Align: 390,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            var jssor_3_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $Align: 390,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
            var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerElement = jssor_2_slider.$Elmt.parentNode;
                var containerElement = jssor_3_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                    jssor_2_slider.$ScaleWidth(expectedWidth);
                    jssor_3_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        };
    </script>
  </head>

  <body onload="myFunction()">
	<div id="loader">
  		<img id="loading-image" src="homepage/images/Ripple.svg" alt="Loading..." />
  	</div> 

  	<div style="display:none;" id="myDiv" class="animate-bottom">
    <header style="height: 620px;">
      <div>
        <div class="carousel-inner" role="listbox" id="besar">
          <div class="carousel-item active" style="background-image: url('homepage/images/bg_cover.png'); ">
          		<p id="demo" style="position: absolute;
			    width:1%;
			    left: 5%;
			    top: 2%;
			    z-index: 1001;font-size: 15px;color:white;"></p>
			    <p id="demo2" style="position: absolute;
			    width:1%;
			    right: 10%;
			    top: 2%;
			    z-index: 1001;font-size: 15px;color:white;" id="dua"></p>
			    <p id="demo3" style="position: absolute;
			    width:1%;
			    left: 5%;
			    top: 60%;
			    z-index: 1001;font-size: 15px;color:white;"></p>
			    <p id="demo4" style="position: absolute;
			    width:1%;
			    right: 10%;
			    top: 60%;
			    z-index: 1001;font-size: 15px;color:white;" id="empat"></p>
              <div class="container">
                  <div class="row justify-content-md-center">
                      <div class="col-md-4 ">
                          <img style="width: 100%; margin-top: 170px;" src="homepage/images/logo.png">
                          <p style="color: white"><b>15 - 16 November 2017</b><br>
                          <span style="font-size: 13px;">Graha Sepuluh Nopember <br> ITS Surabaya</span></p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="z-index: 999; height: 73px" id="navigasi">
      <div class="container">
        <a class="navbar-brand" href="#"><img style="width: 100px;" src="homepage/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#event">EVENT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#wahana">WAHANA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kompetisi">KOMPETISI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header style="margin-top: -73px" id="kepala">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('homepage/images/home_1.png');">
          </div>
          <div class="carousel-item" style="background-image: url('homepage/images/home_2.png')">
          </div>
          <div class="carousel-item" style="background-image: url('homepage/images/home_3.png')">
          </div>
          <div class="carousel-item" style="background-image: url('homepage/images/home_4.png')">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <section id="event" class="event">
      <div class="container">
        <div class="row"> 	
            <div class="col-md-3">
                <h1>EVENT</h1>
                <p class="sec-cpt">ITS EXPO 2017 hadir kembali untuk mendorongmu menuju isan inovatif di masa depan yang tidak pernah meninggalkan jati diri bangsa dan warisan luhur.</p>
            </div>
            <div class="col-md-9">
            <div id="jssor_1" style="width:790px;height:200px;overflow:hidden;visibility:hidden;">
        	<div data-u="slides" style="cursor:default;width:790px;height:200px;overflow:hidden;">
            	<div id="cf">
				  <img class="bottom" src="homepage/images/explore_d.png" style="margin-left: 10px;margin-right: 10px" />
				  <a href="http://staging.garuk.in/explore"><img data-u="image" class="top" src="homepage/images/explore.png" style="margin-left: 10px;margin-right: 10px"/></a>
				</div>
 				<div id="cf">
				  <img class="bottom" src="homepage/images/gkm_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/gkm.png" style="margin-left: 10px;margin-right: 10px" />
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/hof_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/hof.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/entshow_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/entshow.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/pagelaran_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/pagelaran.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/pasarmlam_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/pasarmlam.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
				<div id="cf">
				  <img class="bottom" src="homepage/images/sekbud_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/sekbud.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
				<div id="cf">
				  <img class="bottom" src="homepage/images/talkshow_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/talkshow.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
            </div>
            </div>
            </div>
        </div>
      </div>
    </section>
    <section id="wahana" class="wahana">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
                <h1>WAHANA</h1>
                <p class="sec-cpt">Pesta tak lengkap adanya jika tidak ada Wahana yang tersedia. Tak ketinggalan ITS EXPO 2017 turut menghadirkan Wahana yang dapat mengukir memori kalian dengan berbagai keseruan.</p>
            </div>
            <div class="col-md-9">
            <div id="jssor_2" style="width:790px;height:200px;overflow:hidden;visibility:hidden;">
        	<div data-u="slides" style="cursor:default;width:790px;height:200px;overflow:hidden;">
                <div id="cf">
				  <img class="bottom" src="homepage/images/dk_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/dk.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/markom_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/markom.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/urbanmarket_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/urbanmarket.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
				<div id="cf">
				  <img class="bottom" src="homepage/images/paguyuban_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/paguyuban.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/wahanabudaya_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/wahanabudaya.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/wahanateknologi_d.png" style="margin-left: 10px;margin-right: 10px"/>
				  <img data-u="image" class="top" src="homepage/images/wahanateknologi.png" style="margin-left: 10px;margin-right: 10px"/>
				</div>
            </div>
            </div>
            </div>
        </div>
      </div>
    </section>
    <section id="kompetisi" class="kompetisi">
      <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1>KOMPETISI</h1>
                <p class="sec-cpt">ITS EXPO 2017 hadir kembali untuk memacu bakat dan minatmu dalam berbagai cabang kompetisi yang siap mempertanyakan "kamu kah juaranya?".</p>
            </div>
            <div class="col-md-9">
            <div id="jssor_3" style="width:790px;height:200px;overflow:hidden;visibility:hidden;">
        	<div data-u="slides" style="cursor:default;width:790px;height:200px;overflow:hidden;">
            	<div id="cf">
				  <img class="bottom" src="homepage/images/iepc_d.png" style="margin-left: 10px;margin-right: 10px" />
				  <a href="http://expo.its.ac.id/iepc"><img data-u="image" class="top" src="homepage/images/iepc.png" style="margin-left: 10px;margin-right: 10px"/></a>
				</div>
				<div id="cf">
				  <img class="bottom" src="homepage/images/section_d.png" style="margin-left: 10px;margin-right: 10px" />
				  <a href="http://expo.its.ac.id/section"><img data-u="image" class="top" src="homepage/images/section.png" style="margin-left: 10px;margin-right: 10px" /></a>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/imuse_d.png" style="margin-left: 10px;margin-right: 10px" />
				  <a href="http://expo.its.ac.id/imuse"><img data-u="image" class="top" src="homepage/images/imuse.png" style="margin-left: 10px;margin-right: 10px" /></a>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/ra_d.png" style="margin-left: 10px;margin-right: 10px" />
				  <a href="http://expo.its.ac.id/recycleart"><img data-u="image" class="top" src="homepage/images/ra.png" style="margin-left: 10px;margin-right: 10px" /></a>
				</div>
				<div id="cf">
				  <img class="bottom" src="homepage/images/dance_d.png" style="margin-left: 10px;margin-right: 10px" />
				  <a href="http://expo.its.ac.id/dance"><img data-u="image" class="top" src="homepage/images/dance.png" style="margin-left: 10px;margin-right: 10px" /></a>
				</div>
                <div id="cf">
				  <img class="bottom" src="homepage/images/section_d.png" style="margin-left: 10px;margin-right: 10px" />
				  <a href="http://expo.its.ac.id/section"><img data-u="image" class="top" src="homepage/images/section.png" style="margin-left: 10px;margin-right: 10px" /></a>
				</div>
            </div>
            </div>
            </div>
      </div>
    </section>
    <div class="sponsor" style="background-color: white">
      <div class="container">
        <p class="sponsor-text" style="margin-top: 0px;padding-top: 50px;height: 200px">Sponsored By </p>
      </div>
      <div class="container">
        <p class="sponsor-text" style="margin-top: 0px;padding-top: 50px;height: 200px">Media Partner </p>
      </div>
    </div>

    <footer id="about">
      <div class="row">
          <div class="col-md-6">
              <h3 class="title">ADDRESS</h3>
              <p class="text">Sekretariat ITS Expo<br> 
				R. 204 gedung SCC Lt. 2<br>
				Kampus ITS Sukolilo<br>
				Surabaya<br><br>Email: expo.its.official@gmail.com</p>
          </div>
          <div class="col-md-2">
               <h3 class="title" style="margin-bottom: 18px">EVENT</h3>
               <p class="text" style="margin: 0;width: 100%">Entertainment Show</p>
               <a href="http://staging.garuk.in/explore" style="color:white"><p class="text" style="margin: 0;width: 100%">Explore ITS</p></a>
               <p class="text" style="margin: 0;width: 100%">Gelar Karya Mahasiswa</p>
               <p class="text" style="margin: 0;width: 100%">Hall Of Fame</p>
               <p class="text" style="margin: 0;width: 100%">Pagelaran Seni</p>
               <p class="text" style="margin: 0;width: 100%">Pasar Malam</p>
               <p class="text" style="margin: 0;width: 100%">Sekolah Budaya</p>
               <p class="text" style="margin: 0;width: 100%">Talkshow</p>
          </div>
          <div class="col-md-2">
               <h3 class="title" style="margin-bottom: 18px">WAHANA</h3>
               <p class="text" style="margin: 0;width: 100%">Distrik Kreatif</p>
               <p class="text" style="margin: 0;width: 100%">Markas Komunitas</p>
               <p class="text" style="margin: 0;width: 100%">Paguyuban</p>
               <p class="text" style="margin: 0;width: 100%">Urban Market</p>
               <p class="text" style="margin: 0;width: 100%">Wahana Budaya</p>
               <p class="text" style="margin: 0;width: 100%">Wahana Teknologi</p>
          </div>
          <div class="col-md-2">
               <h3 class="title" style="margin-bottom: 18px">KOMPETISI</h3>
               <a href="http://expo.its.ac.id/dance" style="color:white"><p class="text" style="margin: 0;width: 100%">Dance Competition</p></a>
               <a href="http://expo.its.ac.id/iepc" style="color:white"><p class="text" style="margin: 0;width: 100%">IEPC</p></a>
               <a href="http://expo.its.ac.id/imuse" style="color:white"><p class="text" style="margin: 0;width: 100%">Music Competition</p></a>
               <a href="http://expo.its.ac.id/recycleart" style="color:white"><p class="text" style="margin: 0;width: 100%">Recycle Art</p></a>
               <a href="http://expo.its.ac.id/robotinaction" style="color:white"><p class="text" style="margin: 0;width: 100%">Robot In Action</p></a>
               <a href="http://expo.its.ac.id/section" style="color:white"><p class="text" style="margin: 0;width: 100%">Section</p></a>
          </div>
      </div>
    </footer>
    </div>

    <script src="homepage/vendor/jquery/jquery.min.js"></script>
    <script src="homepage/vendor/popper/popper.min.js"></script>
    <script src="homepage/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
	var countDownDate = new Date("Nov 3, 2017 23:59:00").getTime();

	var x = setInterval(function() {

	    var now = new Date().getTime();
	    
	    var distance = countDownDate - now;
	    
	    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    
	    document.getElementById("demo").innerHTML = days + "<strong> days</strong>";
	    document.getElementById("demo2").innerHTML = hours + "<strong> hours</strong>";
	    document.getElementById("demo3").innerHTML = minutes + "<strong> minutes</strong>";
	    document.getElementById("demo4").innerHTML = seconds + "<strong> seconds</strong>";

	    if (distance < 0) {
	        clearInterval(x);
	        document.getElementById("demo").innerHTML = "EXPIRED";
	        document.getElementById("demo2").innerHTML = "EXPIRED";
	        document.getElementById("demo3").innerHTML = "EXPIRED";
	        document.getElementById("demo4").innerHTML = "EXPIRED";

	    }        
	}, 1000);
	</script>
	<script>
	var myVar;

	function myFunction() {
	    myVar = setTimeout(showPage, 3000);
	}

	function showPage() {
	  document.getElementById("loader").style.display = "none";
	  document.getElementById("myDiv").style.display = "block";
	}
	</script>
 	<script type="text/javascript">jssor_1_slider_init();</script>
  </body>

</html>
