<?php 
	$my_images_arr = scandir("images");
	$img_string = "";

	foreach ($my_images_arr as $image_name) {
		# code...
		if (strlen($image_name) > 2) {
			# code...
			
			$img_string .= '<img src = "images/'.$image_name.'">';
		}
	}
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image</title>
	<style type = "text/css">
		div#full-screen-background-image {
  		z-index: -999;
  		min-height: 100%;
  		min-width: 1024px;
  		width: 100%;
  		height: auto;
  		position: fixed;
  		top: 0;
  		left: 0;
		}
		div#gHolder{
			width:100%;
			height: 100%;
			
		}
		div#theBigImageHolder{
			width: 590px;
			height: 390px;
			 
		}
		div#thumbnailsHolder{
			width: 100%;
			height: 290px;
			background-color: white; 
			margin: 5px auto;
			align-items: left;
			overflow: auto;
		}
		div#theBigImageHolder > img{
			width: 100%;
			height: 400px;

		}
		div#thumbnailsHolder > img{
			width: 110px;
			height: 110px;
			display: block;
			float: left;
			margin: 2px;
			transition: border-radius 0.3s linear 0s;
		}
		div#thumbnailsHolder > img:hover{
			border-radius: 100px;
			cursor: pointer;
		}
	</style>
	<script type ="text/javascript">
		function imgFunc(){
			var bigImage = document.getElementById("bigImage");
			var thumbnailHolder = document.getElementById("thumbnailsHolder");

			thumbnailsHolder.addEventListener("click",function(event){
				//if (event.target.tagname == 'IMG') {
					bigImage.src = event.target.src;
				//}

			},false);
		}

		window.addEventListener("load",imgFunc,false);
	</script>
</head>
<body>

	
</body>
</html>