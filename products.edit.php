<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	 <?php include("partials/head.php");?>
   <script src="ckedit/ckeditor/ckeditor.js"></script>
	<style type="text/css">
		body{
			background: -webkit-radial-gradient(#ffffff,#cdcdcd);
			background: -moz-radial-gradient(#ffffff,#cdcdcd);
			background: -o-radial-gradient(#ffffff,#cdcdcd);
			background: radial-gradient(#ffffff,#cdcdcd);
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		ul.affix {
			position: fixed; 
			top: 0px;
			left: 120px;
			width: 360px;
		}
		ul.affix-top {
			position: static;
		}
		ul.affix-bottom {
			position: absolute;
		}
		.sidenav {
  			margin-top: 30px;
  			margin-bottom: 30px;
  			padding-top:    90px;
  			padding-bottom: 10px;
  			background-color: transparent;
  			border-radius: 5px;
			}
		.sidebar .nav > li > a {
  			display: block;
  			color: #00445e;
  			padding: 5px 20px;
		}
		.sidebar .nav > li > a:hover,
		.sidebar .nav > li > a:focus {
  			text-decoration: none;
  			background-color: transparent;
		}
		.sidebar .nav > .active > a,
		.sidebar .nav > .active:hover > a,
		.sidebar .nav > .active:focus > a {
  		font-weight: bold;
  		color: #598527;
			background-color: transparent;
		}
		#content {
			margin-top:30px;
		}
	</style>
</head>
<body data-spy="scroll" data-target="#affix-nav">
	<?php include("partials/navbar.php");?>
	<div class="container">
    	<div class="row">
        	<nav id="affix-nav" class="sidebar col-md-2 hidden-xs hidden-sm">
            	<ul class="nav sidenav" data-spy="affix">
                	<li class="active"><a href="#section-1" id="sec1-but">Section One</a></li>
                	<li><a href="#section-2" id="sec2-but">Section Two</a></li>
                	<li><a href="#section-3" id="sec3-but">Section Three</a></li>
                	<li><a href="#section-4" id="sec4-but">Section Four</a></li>
                	<li><a href="#section-5" id="sec5-but">Section Five</a></li>
            	</ul>
        	</nav>
        	<div class="col-md-10">
            	<h2 id="section-1">Section One</h2>
              <form action="products.php" method="POST">
	            <textarea class="ckeditor" name="sec1">
              <?php 
                $newdoc2=fopen("sec1edit.html","r") or die("Unable to open the file!");
                echo fread($newdoc2,filesize("sec1edit.html"));
                fclose($newdoc2);
              ?>
            </textarea>
            <input type="submit" value="submit"></form>
        	    <hr>
	            <h2 id="section-2">Section Two</h2>
    	        <form action="products.php" method="POST">
              <textarea class="ckeditor" name="sec2">
              <?php 
                $newdoc2=fopen("sec2edit.html","r") or die("Unable to open the file!");
                echo fread($newdoc2,filesize("sec2edit.html"));
                fclose($newdoc2);
              ?>
            </textarea>
            <input type="submit" value="submit"></form>
            	<hr>
            	<h2 id="section-3">Section Three</h2>
            	<form action="products.php" method="POST">
              <textarea class="ckeditor" name="sec3">
              <?php 
                $newdoc2=fopen("sec3edit.html","r") or die("Unable to open the file!");
                echo fread($newdoc2,filesize("sec3edit.html"));
                fclose($newdoc2);
              ?>
            </textarea>
            <input type="submit" value="submit"></form>
        	    <hr>
            	<h2 id="section-4">Section Four</h2>
            	<form action="products.php" method="POST">
              <textarea class="ckeditor" name="sec4">
              <?php 
                $newdoc2=fopen("sec4edit.html","r") or die("Unable to open the file!");
                echo fread($newdoc2,filesize("sec4edit.html"));
                fclose($newdoc2);
              ?>
            </textarea>
            <input type="submit" value="submit"></form>
            	<hr>
            	<h2 id="section-5">Section Five</h2>
            	<form action="products.php" method="POST">
              <textarea class="ckeditor" name="sec5">
              <?php 
                $newdoc2=fopen("sec5edit.html","r") or die("Unable to open the file!");
                echo fread($newdoc2,filesize("sec5edit.html"));
                fclose($newdoc2);
              ?>
            </textarea>
            <input type="submit" value="submit"></form>
        	</div>
    	</div>
	</div>
	 <?php include("partials/foot.php");?>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#sec1-but").click(function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $("#section-1").offset().top
        }, 670);
      });
      $("#sec2-but").click(function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $("#section-2").offset().top
        }, 670);
      });
      $("#sec3-but").click(function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $("#section-3").offset().top
        }, 670);
      });
      $("#sec4-but").click(function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $("#section-4").offset().top
        }, 670);
      });
      $("#sec5-but").click(function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $("#section-5").offset().top
        }, 670);
      });  
    });
  </script>
</body>
</html>