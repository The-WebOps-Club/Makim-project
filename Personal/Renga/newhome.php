<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<style type="text/css">
		body{
			background: -webkit-radial-gradient(#ffffff,#cdcdcd);
			background: -moz-radial-gradient(#ffffff,#cdcdcd);
			background: -o-radial-gradient(#ffffff,#cdcdcd);
			background: radial-gradient(#ffffff,#cdcdcd);
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 100%;
			width: 100%;
		}
		.str{
			stroke-dasharray:1000px;
			-webkit-animation: ani 4s 1 forwards;
			-webkit-animation-timing-function:ease-in-out;
			-webkit-animation-fill-mode:forwards;
			-moz-animation: ani 4s 1 forwards;
			-moz-animation-timing-function:ease-in-out;
			-moz-animation-fill-mode:forwards;
			-o-animation: ani 4s 1 forwards;
			-o-animation-timing-function:ease-in-out;
			-o-animation-fill-mode:forwards;
		}
		#ent{
			position: absolute;
			color: black;
			top:79%;
			font-family: sans-serif;
			opacity: 0;
			text-align: center;
			-webkit-animation: oth 4s 1 forwards;
			-webkit-animation-timing-function:linear;
			-webkit-animation-fill-mode:forwards;
			-moz-animation: oth 4s 1 forwards;
			-moz-animation-timing-function:linear;
			-moz-animation-fill-mode:forwards;
			-o-animation: oth 4s 1 forwards;
			-o-animation-timing-function:linear;
			-o-animation-fill-mode:forwards;
		}
		#com{
			position: absolute;
			top:66%;
			color: #00445e;
			font-family: sans-serif;
			opacity: 0;
			text-align: center;
			-webkit-animation: oth 4s 1 forwards;
			-webkit-animation-timing-function:linear;
			-webkit-animation-fill-mode:forwards;
			-moz-animation: oth 4s 1 forwards;
			-moz-animation-timing-function:linear;
			-moz-animation-fill-mode:forwards;
			-o-animation: oth 4s 1 forwards;
			-o-animation-timing-function:linear;
			-o-animation-fill-mode:forwards;
		}
		#arr{
			position: absolute;
			height: 50px;
			width:100px;
			top:91.5%;
			opacity: 0;
   			left:50%;
   			margin-top: -25px;
	   		margin-left: -50px;
			-webkit-animation: oth 4s 1 forwards;
			-webkit-animation-timing-function:linear;
			-webkit-animation-fill-mode:forwards;
			-moz-animation: oth 4s 1 forwards;
			-moz-animation-timing-function:linear;
			-moz-animation-fill-mode:forwards;
			-o-animation: oth 4s 1 forwards;
			-o-animation-timing-function:linear;
			-o-animation-fill-mode:forwards;
			transform:translateY(0px);
			transition: transform 0.5s;
		}
		#sec{
			position: absolute;
			top:110%;
			height: 100%;
		}
		#arr:hover{
			transform:translateY(15px);
			transition: transform 0.5s;
		}
		#ent:hover + #arr{
			transform:translateY(15px);
			transition: transform 0.5s;
		}
		.my-svg-container{
			top: 20%;
 			display: inline-block;
 			position: absolute;
			width: 25%;
 			padding-bottom: 50%;
 			vertical-align: bottom; 
 			left: 50%;
			-webkit-transform: translateX(-50%);
			-moz-transform: translateX(-50%);
			transform: translateX(-50%);
		}
		.my-svg{ 
  			display: block;
  			position: absolute;
  			top: 0;
  			left: 0;
		}
		#p2{
			text-align: justify;
		}
		#im{
			position: relative;
			top: -25px;
    		width: 300px;
			height: 70px;
		}
    	#d1{
    		background-color: black;
    		height: 400px;
    		width: 1px;
    		position: relative;
    		top: 10px;
    		left: 25px;
   		}
    	
   		#im0{
    			padding-left: 20px;
    	}
    	#d{
    		text-align: center;
    	}
		@-o-keyframes oth{
			50%{
				opacity: 0;
			}
			100%{
				opacity: 1;
			}
		}
		@-o-keyframes ani{
			0%{
				stroke-dashoffset:1000px;
				fill-opacity:0;
			}
			50%{
				stroke-dashoffset:0px;
				fill-opacity:0;
			}
			100%{
				stroke-dashoffset:0px;
				fill-opacity:1;
			}
		}
		@-moz-keyframes oth{
			50%{
				opacity: 0;
			}
			100%{
				opacity: 1;
			}
		}
		@-moz-keyframes ani{
			0%{
				stroke-dashoffset:1000px;
				fill-opacity:0;
			}
			50%{
				stroke-dashoffset:0px;
				fill-opacity:0;
			}
			100%{
				stroke-dashoffset:0px;
				fill-opacity:1;
			}
		}
		@-webkit-keyframes oth{
			50%{
				opacity: 0;
			}
			100%{
				opacity: 1;
			}
		}
		@-webkit-keyframes ani{
			0%{
				stroke-dashoffset:1000px;
				fill-opacity:0;
			}
			50%{
				stroke-dashoffset:0px;
				fill-opacity:0;
			}
			100%{
				stroke-dashoffset:0px;
				fill-opacity:1;
			}
		}
		#un:hover{
			border-bottom: solid;
			border-width: 1px;
			border-color: grey;
		}
		#u1{
			padding-right: 5px;
		}
		#li{
			padding-right: 30px;
		}
		@media (min-width:768px) {
			#nav{
			background-color: transparent;
			padding-top: 10px;
			height: 70px;
			padding-right: 40px;
		}
		#d3{
    		border-left: solid;
    		border-width: 1px;
    		border-color: black;
         }
         #im1{
      		width: 422px;
      		height: 250px;
       	}
       
 		}
 	@media(max-width: 768px){
 		#im1{
 			width: 200px;
 			position: relative;
 			top: 10px;
 			height:150px;
 		}
 		#im{
 			width:160px;
 			height:55px;
 			position: relative;
 			top:-10px;
 		}
 		/*#nav{
 			height: 70px;
 		}*/
 		
 	}
	</style>
</head>	
<body>
	<div class="fluid-container">
		<div id="dm">
			<div class="my-svg-container">
				<svg class="my-svg" preserveAspectRatio= "xMinYMin meet" viewBox="0 0 350 350">
					<path class="str" d="M 173 177 Q 110 195 45 195 Q 45 260 25 325 Q 90 305 155 305 Q 155 240 173 177" fill-opacity="0" fill="#0076a3" stroke="#0076a3" stroke-width="2" />
					<path class="str" d="M 177 173 Q 240 155 305 155 Q 305 90 325 25 Q 260 45 195 45 Q 195 110 177 173" fill-opacity="0" fill="#598527" stroke="#598527" stroke-width="2" />
					<path class="str" d="M 173 173 Q 165 140 165 105 Q 125 105 85 85 Q 105 125 105 165 Q 140 165 173 173" fill-opacity="0" fill="#fff200" stroke="#fff200" stroke-width="2" />
					<path class="str" d="M 177 177 Q 185 210 185 245 Q 225 245 265 265 Q 245 225 245 185 Q 210 185 177 177" fill-opacity="0" fill="#a0410d" stroke="#a0410d" stroke-width="2" />
				</svg>
			</div>
			<div id="com" class="col-xs-12"><h2 style="font-weight:700">M A K I M&nbsp;&nbsp; M E D - A I D S</h2></div>
			<div id="ent" class="col-xs-12"><h3 style="font-weight:700">ENTER WEBSITE</h3></div>
			<img id="arr" class="img-responsive" src="ar5.png">
		</div>
	
	

		<div id="sec">
			<nav class="navbar navbar-default" role="navigation" id="nav">
  <div class="container-fluid" id="h1">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="logomak.png" id="im"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" id="u1">
        <li id="l1"><a href="#" id="un"><div>HOME</div></a></li>
        <li id="l1"><a href="products.html" id="un"><div>OUR PRODUCTS</div></a></li>
        <li id="l1"><a href="enquiry.html" id="un"><div>PLACE AN ENQUIRY</div></a></li>
        <li id="l1"><a href="contactus.html" id="un"><div>CONTACT US</div></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br><br><div class="container-fluid">
<div class="row">
<div class="col-xs-3 hidden-sm hidden-md hidden-lg">
</div>
<div class="hidden-xs col-sm-3 col-md-3 col-lg-3" id="d">
<p id="p1">
<b>Our Clients:</b></p>
<img src="tiger.jpg" id="im0" width="100%" class="img-responsive"></div><div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" id="d3"><br>
<?php 
	$newdoc=fopen("newhomefile.html","w") or die("Unable to open the file!");
	$txt=$_POST["ck1"];
	fwrite($newdoc,$txt);
	$txt=$_POST["ck2"];
	fwrite($newdoc,$txt);
	$txt=$_POST["ck3"];
	fwrite($newdoc,$txt);
	fclose($newdoc);
    $newdoc2=fopen("newhomefile.html","r") or die("Unable to open the file!");
    echo fread($newdoc2,filesize("newhomefile.html"));
    fclose($newdoc2);
?>	
<div class="col-xs-6 hidden-sm hidden-md hidden-lg">
<p id="p1">
<b>Our Clients:</b></p>
<img src="tiger.jpg" width="100%" class="img-responsive"></div>
<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" id="d4">
	<br>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 
  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="logomak.png" id="im1" >
      <div class="carousel-caption">
       </div>
    </div>
    <div class="item">
      <img src="pop2.jpg" id="im1" >
      <div class="carousel-caption">
        </div>
    </div>
    <div class="item">
      <img src="pop3.jpg" id="im1" >
      <div class="carousel-caption">
        </div>
    </div>
    <div class="item">
      <img src="pop4.jpg" id="im1" >
      <div class="carousel-caption">
        </div>
    </div>
    <div class="item">
      <img src="pop5.jpg" id="im1" >
      <div class="carousel-caption">
        </div>
    </div>
    <div class="item">
      <img src="pop6.jpg" id="im1" >
      <div class="carousel-caption">
        </div>
    </div>
  </div>
  <a id="p" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a id="n" class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div></div></div>
	</div></div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	
$("body").css("overflow", "hidden");
	$(document).ready(function () {
    $('.carousel').carousel({
        interval: 3000
    });

    $('.carousel').carousel('cycle');
});
		$(document).ready(function(){
			$("#ent").click(function(){
				$("#sec").animate({top : 0},800);
				$("#dm").hide();
				$("body").css("overflow", "auto");
			});
			$("#arr").click(function(){
				$("#sec").animate({top : 0},800);
				$("#dm").hide();
				$("body").css("overflow", "auto");
			});
		
		});
	</script>
</body>
</html>