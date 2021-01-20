<?php 

  $con = mysqli_connect("localhost","root");

  mysqli_select_db($con,'category');


if (isset($_POST['sub'])) {
  
  $catname = $_POST['catname'];
  $catgroup = $_POST['catgroup'];
  
  




  
$dup = mysqli_query($con,"select * from tree where catname ='$catname'");

  if (mysqli_num_rows($dup) > 0)
   {
    echo "<script>alert('This name is already exist')</script>";
   }
   else{

  
  
  
  





  $insert = "insert into tree (catname,catgroup) VALUES ('$catname','$catgroup')";


  if (mysqli_query($con,$insert))
  {
    echo "<script>alert('Saved')</script>"; 
  }
  else
  {
    echo "<script>alert('Failed')</script>";
  }



}

  
}



 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
  <?php include("includes/index.php")?>

  <title> Account Master</title>
</head>
<body>


<div class="container-fluid" style="margin-top: -70%; position: fixed;">
  <div class="row">
    <div class="col-sm-2 mt-3"></div>
      <div class="col-sm-10">
        <form action="" method="post" class="p-3 m-5">
          <h6 class="text-left" style="margin-left: -125px;">Account Details<hr style="width: 105%;"></hr><br></h6>
          <div class="form-group">
            <label style="margin-left: -45px;">Category Name</label>
            <input type="text"  name="catname" required="" style="margin-left : 20px;">
            <label style="margin-left: -45px;">Category Group</label>
            <input type="text"  name="catgroup" autocomplete="off" required="" style="margin-left : 20px;">
            

          <div class="form-group text-center">
            
            <input type="submit" accesskey="t" class="btn btn-danger" value="Save" name="sub" style="width: 140px; height: 35px; background: linear-gradient(to bottom, navy, #ffffff);">
            
            
          </div>
        </form>
        
      </div>
      <div class="col-lg-2"></div>
  </div>
</div>

<hr>

<table class="table" style="margin-left: 175px;">
  <thead style="background: black; color: white;">
    <tr>
      <th scope="col">SNo</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Group</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      
    </tr>
  </thead>
  <?php 
    $querys = "SELECT * FROM tree";
    $result= mysqli_query($con,$querys);
    while ($res=mysqli_fetch_array($result)) {
    
    
   ?>
  <tbody>


    
    <tr>
      <td><?php echo $res['id'] ?></td>
      <td><?php echo $res['catname'] ?></td>
      <td><?php echo $res['catgroup'] ?></td>
      <td><a href="delete.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value="Delete" name="id"></a></td>
      <td><a href="update.php?id=<?php echo $res['id'];?>"><input type="button" class="btn btn-primary" value="Update" name=""></a></td>
    </tr>
   
  </tbody>
 
<?php } ?>
</table>


 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></

</body>
</html> 