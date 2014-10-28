<!DOCTYPE html>
<html>
	<head>
		<title>Pho- Traditional Vietnamese Food</title>
		<link href="css/pepper-grinder/jquery-ui-1.10.4.custom.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/jquery-ui-1.10.4.custom.js"></script>
		<link rel="stylesheet" href="/style.css">
		<script>
			$(document).ready(function(){
				$("#loadContent").click(function(){
					$("#div1").load("test.html");
				});
			});
			$(function() {
				$( "#tabs" ).tabs();
			});
			
		</script>
	</head>
	<body>
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Introduce-Pho</a></li>
				<li><a href="#tabs-2">How to make</a></li>
				<li><a href="#tabs-3">Pictures</a></li>
			</ul>
			<div id="tabs-1">
				<div id="div1">
					<p>Pho is a Vietnamese noodle soup consisting of broth, linguine-shaped rice noodles called banh pho, a few herbs, and meat. Pho is a popular street food in Vietnam and the specialty of a number of restaurant chains around the world. It is primarily served with either beef or chicken. The Hanoi and Saigon styles of pho differ by noodle width, sweetness of broth, and choice of herbs. The origin of pho and its name is a subject of scholarly debate.</p>
					<button id="loadContent" type="button">Load More</button> 
				</div>
			</div>
			<div id="tabs-2">
				<iframe width="560" height="315" src="//www.youtube.com/embed/_NameSX_Q8I" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="tabs-3">
				<h3>Some pictures</h3>
					<img border="0" src="images/pho1.jpg" alt="Pho" width="304" height="228">
					<img border="0" src="images/pho2.jpg" alt="Pho" width="304" height="228">
					<img border="0" src="images/pho3.jpg" alt="Pho" width="304" height="228">
					<img border="0" src="images/pho4.jpg" alt="Pho" width="304" height="228">
					<img border="0" src="images/pho5.jpg" alt="Pho" width="304" height="228">
			</div>
		</div>
	</body>
</html>