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
			left: -10px;
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
			left: -40px;
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
 		li{
 			cursor: pointer;
  		}
 		ul{
 			list-style: none;
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
			<ul>
				<li><div id="ent" class="col-xs-12"><h3 style="font-weight:700">ENTER WEBSITE</h3></div></li>
				<li><img id="arr" class="img-responsive" src="ar5.png"></li>
			</ul>	
		</div>

		<div id="sec">
			<?php include("navbar.php");?>
			<br><br>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-3 hidden-sm hidden-md hidden-lg">
					</div>
					<div class="hidden-xs col-sm-3 col-md-3 col-lg-3" id="d">
						<p id="p1"><b>Our Clients:</b></p>
						<img src="tiger.jpg" id="im0" width="100%" class="img-responsive">
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" id="d3"><br>
						<p id="p2">Established in the year 1997, we were <b>the first to manufacture Plaster Of Paris Bandages B.P (P.O.P Bandages) in Gujarat</b> - one of the most industrialized states in India.</p>
						<p id="p2">The entire technology involved in manufacturing has been conceptualized, designed and made by us which notonly produces economic versality. Recognizing this achievement the Government of Gujarat, as a special case, conferred the authority of manufacturing chemist on Shri. Bhupendra Makim, one of our partners, who is an engineer by qualification.</p>
						<br>
						<p id="p2"><b>Currently, we supply our bandages under thebrand name of MEDICAST to several individual Doctors, Hospitals, Several Government agencies (through tenders) as well as merchant exporters. We are also capable of manufacturing customsized P.O.P Bandages under custom brand names (pre-dominantly used for export).</b></p>
					</div><br>
					<div class="col-xs-6 hidden-sm hidden-md hidden-lg">
						<p id="p1"><b>Our Clients:</b></p>
						<img src="tiger.jpg" width="100%" class="img-responsive"></div>
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" id="d4">
							<br>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  								<div class="carousel-inner" role="listbox">
    								<div class="item active">
      									<img src="logomak.png" id="im1" >
      									<div class="carousel-caption"></div>
    								</div>
    								<div class="item">
      									<img src="pop2.jpg" id="im1" >
      									<div class="carousel-caption"></div>
    								</div>
    								<div class="item">
      									<img src="pop3.jpg" id="im1" >
      									<div class="carousel-caption"></div>
    								</div>
    								<div class="item">
      									<img src="pop4.jpg" id="im1" >
      									<div class="carousel-caption"></div>
    								</div>
    								<div class="item">
      									<img src="pop5.jpg" id="im1" >
      									<div class="carousel-caption"></div>
    								</div>
    								<div class="item">
      									<img src="pop6.jpg" id="im1" >
      									<div class="carousel-caption"></div>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
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