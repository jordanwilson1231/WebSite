<?php
if(isset($_GET['formSubmit']) && $_GET['formSubmit'] == 'Submit') 
{
//Connect to MySQL database my_db
include 'my_dbcon.php';

//Recieve user input about which columns to display
if(empty($_GET['columns'])) {
	echo("No columns were selected");
}
else {
	$columns = $_GET['columns'];
	$N = count($columns);
	
	//Create a comma seperated string of the selected columns
	$columnString = $columns[0];
	for ($i = 1; $i < $N; $i++) {
		$columnString .= ", " . $columns[$i];
	}
	
	$result = mysqli_query($con, "SELECT " . $columnString . " FROM Persons");
	
	//Create table for data display
	echo "<table border='1'>
	<tr>";
	for($i=0; $i < $N; $i++) {
		echo "<th>" . $columns[$i] . "</th>";
	}
	echo "</tr>";
	
	//Populate data table
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		for($i=0; $i < $N; $i++) {
			echo "<td>" . $row[$columns[$i]] . "</td>";
		}
		echo "</tr>";
		
	}
}
}
?>