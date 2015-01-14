
<style type="text/css">
#im{
	position: relative;
	top: -25px;
	width: 300px;
	height: 70px;
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
}
</style>
<nav class="navbar navbar-default" role="navigation" id="nav">
	<div class="container-fluid" id="h1">
		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    	    	<span class="sr-only">Toggle navigation</span>
	    		<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
		        <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
		    </button>
	        <a class="navbar-brand" href="homeonly.php"><img src="logomak.png" id="im"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  			<ul class="nav navbar-nav navbar-right" id="u1">
    			<li id="l1"><a href="homeonly.php" id="un"><div>HOME</div></a></li>
    			<li id="l1"><a href="products.php" id="un"><div>OUR PRODUCTS</div></a></li>
    			<li id="l1"><a href="enquiry.php" id="un"><div>PLACE AN ENQUIRY</div></a></li>
    			<li id="l1"><a href="contactus.php" id="un"><div>CONTACT US</div></a></li>
  			</ul>
		</div>
	</div>
</nav>