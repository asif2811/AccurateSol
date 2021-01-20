<?php

include ('connect.php');


?>



<!DOCTYPE html>
<html>
<head>

  <?php

  include ('index.php');





   ?>

   <script>
    function openWin() {
    window.open("deptadd.php");
    }
   </script>

  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>
<body>

<!---

<table class="table" id="myTable" style="margin-left: 180px; width: 87%;margin-top: -960px; border-bottom: 1px solid;">
  <thead style="background: darkgrey; color: white;">
    <tr>
      <th scope="col">SNo</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Code</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      
    </tr>
  </thead>
  <?php 
    $querys = "SELECT * FROM deptmast";
    $result= mysqli_query($con,$querys);
    while ($res=mysqli_fetch_array($result)) {
    
    
   ?>
  <tbody>


    
    <tr>
      <td><?php echo $res['id'] ?></td>
      <td><?php echo $res['prodname'] ?></td>
      <td><?php echo $res['prodcode'] ?></td>
      <td><a href="proddel.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value="Delete" name="id"></a></td>
      <td><a href="produpdate.php?id=<?php echo $res['id'];?>"><input type="button" class="btn btn-primary" value="Update" name=""></a></td>
    </tr>
   
  </tbody>
 
<?php } ?>
</table>

<input type="text" name="" id="myInput" placeholder="Search the Name" onkeyup="myFunction()" autocomplete="off" style="margin-left: 190px; margin-top: -200px;">
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

--->

<div class="container-fluid" style="margin-left: 180px; margin-top: 30px;">
  <div class="row">
    <div class="form-group">
      <label style="margin-left: 20px;">Search</label>
      <input type="text" name="" id="myInput" placeholder="Enter the Name" onkeyup="myFunction()">
      <input type="button" name="" value="Add Department" onclick="openWin()" style="background: linear-gradient(to bottom, darkgrey, #ffffff);">
      <a href="index.php"><input type="button"  value="Close" name="cls" style=" width: 125px; background: linear-gradient(to bottom, darkgrey, #ffffff);"></a>
    </div>
  </div>
  <table class="table" id="myTable" style="border-bottom: 1px solid; border: 1px solid;  width: 1236px;">
  <thead style="background: darkgrey; color: white; line-height: 15px;">
    <tr>
      <th scope="col" style="border: 1px solid black;">SNo</th>
      <th scope="col" style="border: 1px solid black;">Department Name</th>
      <th scope="col" style="border: 1px solid black;">Deparment Code</th>
      <th scope="col" style="border: 1px solid black; text-align: center;">Delete</th>
      <th scope="col" style="border: 1px solid black; text-align: center;">Edit/Update</th>
      
    </tr>
  </thead>
  <?php 
    $querys = "SELECT * FROM deptmast";
    $result= mysqli_query($con,$querys);
    while ($res=mysqli_fetch_array($result)) {
    
    
   ?>
  <tbody>


    
    <tr>
      <td style="border: 1px solid;"><?php echo $res['id'] ?></td>
      <td style="border: 1px solid black;"><?php echo $res['deptname'] ?></td>
      <td style="border: 1px solid black;"><?php echo $res['deptcode'] ?></td>
      <td style="border: 1px solid black; text-align: center;"><a href="deptdel.php?id=<?php echo $res['id']?>"><input type="button" value="Delete" name="id" style="width: 125px;background: linear-gradient(to bottom, darkgrey, #ffffff);"></a></td>
      <td style="border: 1px solid black; text-align: center;"><a href="deptupdate.php?id=<?php echo $res['id'];?>"><input type="button" value="Edit" name="" style="width: 125px;background: linear-gradient(to bottom, darkgrey, #ffffff);"></a></td>
    </tr>
   
  </tbody>
 
<?php } ?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div>



</body>
</html>