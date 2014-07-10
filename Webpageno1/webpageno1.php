<!DOCTYPE html>
<html>

<head>
   <title>Web Page No.1</title>
   <link rel="stylesheet" type="text/css" href="mystyle.css">
   <script>
	function changeImage() {
		var image = document.getElementById('myImage');
		if (image.style.display == 'none') {
			image.style.display = 'block';
		} else {
        image.style.display = 'none'
		}
	}
	</script>
</head>

<body>

<div class=header>
<h1  id=head1>Web Page No. 1</h1>
</div>

<div id=menu>
<?php include 'menu.php'; ?>
</div>

<div class=left>
</div>

<div class=right>
<h2 id=section>Home</h2>
<button id=button1 onclick="changeImage()">This is my first button</button>
<br>
<img id="myImage" src="awesome_lincoln.jpg" width="600" >
</div>

<div id='footer'><?php include 'date.php';?></div>




</body>
</html>