<style type="text/css">
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
   		
    	#d{
    		text-align: center;
    	}
</style>
<div id="sec">
			<?php include("partials/navbar.php");?>
			<br><br>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-3 hidden-sm hidden-md hidden-lg">
					</div><div class="hidden-xs col-sm-3 col-md-3 col-lg-3" id="d">
					<?php include("partials/ourclients.php");?></div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" id="d3"><br>
						<?php 
						if(empty($_POST["intro"]))
							{
							$newdoc2=fopen("introedit.html","r") or die("Unable to open the file!");
    						echo fread($newdoc2,filesize("introedit.html"));
    						fclose($newdoc2);
						}
						else{
							$newdoc=fopen("introedit.html","w") or die("Unable to open the file!");
							$txt=$_POST["intro"];
							fwrite($newdoc,$txt);
							fclose($newdoc);
    						$newdoc2=fopen("introedit.html","r") or die("Unable to open the file!");
    						echo fread($newdoc2,filesize("introedit.html"));
    						fclose($newdoc2);
    					}
						?>	
					</div><br>
					<div class="col-xs-6 hidden-sm hidden-md hidden-lg">
						<?php include("partials/ourclients.php");?></div>
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" id="d4">
							<br>
							<?php include("partials/carousel.php");?>
						</div>
					</div>
				</div>
			</div>
		</div>