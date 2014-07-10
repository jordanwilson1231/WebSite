<!DOCTYPE html>
<html>

<head>
   <title>Web Page No.1 Template</title>
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

<?php
include 'my_dbcon.php';

//escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);

$sql = "INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$firstname', '$lastname', '$age')";

if (!mysqli_query($con, $sql)) {
	die('Error: ' . mysqli_error($con));
}
echo "1 record added <br> Forms reopening...";

mysqli_close($con);
?>

<script>
window.onload = function(){
	setTimeout(function() {
		window.location.assign("datainsertion.php")
	}, 2000);
}
</script>
</div>
<div id='footer'><?php include 'date.php';?></div>
</body>
</html>