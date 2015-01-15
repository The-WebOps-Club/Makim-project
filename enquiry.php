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
	<?php include("partials/navbar.php");?>
	<?php
$name = $email  = $mobilenumber = $querry = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $mobilenumber = test_input($_POST["mobilenumber"]);
   $querry = test_input($_POST["querry"]);
   
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

	<div class="container" style="margin-top:10%">
		<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="form-group">
				<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-5">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span><input type="text" class="form-control" placeholder="Name" name="name">
				</div>		
			</div>
			<div class="form-group">
				<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-5">
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span><input type="text" class="form-control" placeholder="Email" name="email">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-5">
					<span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span><input type="text" class="form-control" placeholder="Mobile No." name="mobilenumber">
				</div>		
			</div>
			<div class="form-group">
				<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-5 col-lg-offset-4 col-md-offset-4">
					<span class="input-group-addon"><span class="glyphicon glyphicon-edit"></span></span><textarea class="form-control" rows="6" placeholder="Your Query" name="querry"></textarea>
				</div>		
			</div>
			<br>
			<div class="input-group col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-5">
				<button type="submit" class="btn btn-primary" name="submit" value="Submit">SUBMIT</button>
			</div>	
		</form>
	</div>	
	<?php
$myfile = fopen("enquiry/$name.txt", "x") or die("Unable to open file!");
fwrite($myfile, $name);
fwrite($myfile, $email);
fwrite($myfile, $mobilenumber);
fwrite($myfile, $querry);
fflush($myfile);
fclose($myfile);
$name = $email  = $mobilenumber = $querry = "";
?>
	<?php include("partials/foot.php");?>
</body>
</html>