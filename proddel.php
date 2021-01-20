<?php 

include ('connect.php');

if (!empty($_GET['id'])) {
	
	$id	= $_GET['id'];
	$del = "DELETE FROM prodmast WHERE id = '".$id."'";
	$result = mysqli_query($con,$del);



	if ($result) {
		
	}
}



header('location:display.php');







 ?>