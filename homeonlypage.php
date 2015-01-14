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
	</style>
</head>	
<body>
	<div class="fluid-container">
			<?php include("partials/homeonly.php");?></div>
		<?php include("partials/foot.php");?>
	<script type="text/javascript">
		$("body").css("overflow","auto");
		$(document).ready(function () {
    		$('.carousel').carousel({
        	interval: 3000
    		});
    		$('.carousel').carousel('cycle');
		});
	</script>
</body>
</html>