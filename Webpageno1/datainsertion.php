<!DOCTYPE html>
<html>
<head>
   <title>Web Page No.1 Date Insertion</title>
   <link rel="stylesheet" type="text/css" href="mystyle.css">
   
</head>
<body>

<div class=left>
</div>
<div class=top>
<h1  id=head1>Web Page No. 1</h1>
</div>
<div class=right>
</div>

<div id=menu>
<?php include 'menu.php'; ?>
</div>

<h2 id=section>Data Insertion</h2>

<form action="insert_script.php" method="post">
First Name: <input type="text" name="firstname"><br>
Last Name:  <input type="text" name="lastname"><br>
Age:       <input type="text" name="age"><br>
<input type="submit">
</form>

</body>
</html>