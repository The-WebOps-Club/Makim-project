
<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include("partials/head.php");?>
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
				<li><img id="arr" class="img-responsive" src="img/ar5.png"></li>
			</ul>	
		</div>

		<?php include("partials/homeonly.edit.php");?>
	</div>
	<?php include("partials/foot.php");?>
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