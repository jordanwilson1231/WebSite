<!DOCTYPE html>
<html>

<head>
    <title>Web Page No.1 Data</title>
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

<h2 id=section>Data</h2>

<p>Select which columns to display</p>


<form name="columnSelection" action="datapage.php" method="get">
<input type="checkbox" name="columns[]" value="firstname">First Name<br>
<input type="checkbox" name="columns[]" value="lastname">Last Name<br>
<input type="checkbox" name="columns[]" value="age">Age<br>
<input type="submit" name="formSubmit" value="Submit">
</form>

<?php include 'tabledisplay_script.php' ?>
<br>
<br>
<br>

<button id='delTable' onClick = confirmClick()>Clear entire data table</button>

<div id='delete'>
<form name="delete" action="datapage.php" method="post">
<input type ="submit" name="submit" value="DELETE">
</form>
</div>

<?php 
if (isset($_POST['submit']) && $_POST['submit'] == 'DELETE') {
	include 'my_dbcon.php';
	
	mysqli_query($con, "DELETE FROM Persons");
	mysqli_close($con);
	echo "Data Table deleted";
}
?>

<script>
function confirmClick() {
	var confirmation = confirm("Are you sure you want to delete the entire table?");
	if (confirmation == true) {
		var username = prompt("Please enter your username", "Username");
		var password = prompt("Please enter your password", "********");
	}
	if (username == "jordan" && password == "123193") {
		document.getElementById('delete').style.display = 'block';
	}
}
</script>
</body>
</html>