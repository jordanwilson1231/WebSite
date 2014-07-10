<!DOCTYPE html>
<html>
<head>
   <title>Web Page No.1 Date Insertion</title>
   <link rel="stylesheet" type="text/css" href="mystyle.css">
   
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
<h2 id=section>Data Insertion</h2>

<form action="insert_script.php" method="post">
First Name: <input type="text" name="firstname"><br>
Last Name:  <input type="text" name="lastname"><br>
Age: &nbsp &nbsp &nbsp &nbsp <input type="text" name="age"><br>
<input type="submit">
</form>
</div>

<div id='footer'><?php include 'date.php';?></div>
</body>
</html>