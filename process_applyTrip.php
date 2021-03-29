<?php
include_once 'db_applyTrip.php';
if(isset($_POST['save']))
{	 
	 $Full_name = $_POST['Full_name'];
	 $id = $_POST['id'];
	 $skills = $_POST['skills'];
	 $sql = "INSERT INTO users(Full_name,id,skills)
	 VALUES ('$Full_name','$id','$skills')";
	 if (mysqli_query($conn, $sql)) {
		echo "Applied for trip !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>