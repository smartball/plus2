<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type = "text/css">
		.imgStyle{
			height: 100px;
			width: 100px;
			border:3px solid grey;
		}
	</style>
</head>
<body>
	<img alt="" height="540px" width="540px" style="border:3px solid grey"
		src="https://www.home.co.th/images/img_v/img_Directory/2013129101827_3pic.jpg" id = "mainImage">
		<br>
		<div id="myDiv" onclick = "changeImage(event)"> 
		<img src="http://www.lh.co.th/upload_files/pic_newhome/1389612232911_148_Amplio.jpg" alt="" class ="imgStyle">
		<img src="http://www.homenayoo.com/wp-content/uploads/2014/08/%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99-27.jpg" alt="" class ="imgStyle">
		<img src="http://www.lh.co.th/upload_files/pic_newhome/1389612232911_148_Amplio.jpg" alt="" class ="imgStyle">
		<img src="http://www.lh.co.th/upload_files/pic_newhome/1389612232911_148_Amplio.jpg" alt="" class ="imgStyle">
		<img src="http://www.lh.co.th/upload_files/pic_newhome/1389612232911_148_Amplio.jpg" alt="" class ="imgStyle">
		</div>
		<script type ="text/javascript">
			var images = document.getElementById("myDiv").getElementByTagName("img");

			for(var i = 0; i < images.length; i++){
				images[i].onmouseover = function(){
					this.style.cursor = "hand";
					this.style.borderColor = "red";
				}
				images[i].onmouseout = function(){
					this.style.cursor = "pointer";
					this.style.borderColor = "grey";
				}
			}

			function changeImage(event){
				event = event || window.event;

				var targetElement = event.target || event.srcElement;
				if(targetElement.tagName == "IMG"){
					document.getElementById("mainImage").src = targetElement.getAttribute("src")
				}
			}

		</script>
</body>
</html>