<!DOCTYPE html>
<html>
<head>
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
 	.btn{
 		position: relative;
 		width: 100%;
 	}
	</style>	
</head>
<body>
	<?php include("navbar.php");?>
	<div class="container" style="margin-top:10%">
		<form role="form">
			<div class="form-group">
				<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-5">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span><input type="text" class="form-control" placeholder="Name">
				</div>		
			</div>
			<div class="form-group">
				<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-5">
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span><input type="email" class="form-control" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-5">
					<span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span><input type="text" class="form-control" placeholder="Mobile No.">
				</div>		
			</div>
			<div class="form-group">
				<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-4">
					<span class="input-group-addon"><span class="glyphicon glyphicon-edit"></span></span><textarea class="form-control" rows="6" placeholder="Your Query"></textarea>
				</div>		
			</div>
			<br>
			<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-5">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>	
		</form>
	</div>	
	<?php include("partials/foot.php");?>
</body>
</html>