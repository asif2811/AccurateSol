<?php 

$conn = mysqli_connect('localhost','root','','category');

if (!empty($_GET['id'])) {
	
	$id	= $_GET['id'];
	$del = "DELETE FROM tree WHERE id = '".$id."'";
	$result = mysqli_query($conn,$del);



	if ($result) {
		
	}
}



header('location:display.php');



 ?>




 