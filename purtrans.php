<?php 

	include('connect.php');

	if (isset($_POST['sub'])) {

		$vno = $_POST['vno'];
		$puracct = $_POST['puracct'];
		$purdate = $_POST['purdate'];

	$purqry = "INSERT INTO purtrans (vno,puracct,purdate) VALUES ('$vno','$puracct','$purdate')";

	if (mysqli_query($con,$purqry))
  {
    echo "<script>alert('Saved')</script>"; 
  }
  else
  {
    echo "<script>alert('Failed')</script>";
  }

}

 ?>

<?php 

	
		
	
	$query = "SELECT vno FROM purtrans ORDER BY vno desc";
	$res = mysqli_query($con,$query);
	$row = mysqli_fetch_array($res);
	$lastid = $row['vno'];

	if (empty($lastid))
	{
		$number = "E-0000001";

	}
	else
	{
		$idd = str_replace("E-","","$lastid");
		$id = str_pad($idd+1, 7,0, STR_PAD_LEFT);
		$number = 'E-'.$id;
	}



 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Accurate</title>


      
      <link rel="stylesheet" type="text/css" href="jquery-ui-1.10.4.custom.min.css">

	<?php include('index.php') ?>
	
</head>
<body>




	<h5 style="background: lightgrey; width: 88.8%;height: 50px;margin-left: 155px;padding: 10px;margin-top: 3px;">Purchase Voucher</h5>
	<div class="container-fluid" style="margin-left: 190px;">
		<form action="" method="post">
			
			<div class="row">
				<div class="form-group" style="margin-top: 10px;">
					<label>V.No</label>
					<input type="text" name="vno" id="vno" value="<?php echo $number; ?>">
					<div class="form-group">
						<label>Purchase Account</label>
						<input type="text" name="puracct">
					</div>
					
					<label>Date</label>
					<input type="date" name="purdate" id="datepicker" value="<?php echo date('d-m-y')?>">
				</div>
			</div>
			
			<div class="form-group">
				<input type="submit" name="sub" value="Save">
			</div>
		</form>
	</div>
	<script src="jquery-3.5.1.min.js"></script>
	<script src="jquery-ui-1.10.4.custom.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#datepicker').datepicker({
				dateFormat: "dd-mm-yy",
				changeMonth: true,
				changeYear: true,
			});
			 
			 
		})
	</script>
</body>
</html>