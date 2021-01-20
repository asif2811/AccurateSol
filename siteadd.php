<?php 

  include('connect.php');

if (isset($_POST['sub'])) {

$sitename = $_POST['sitename'];
$sitecode = $_POST['sitecode'];
$sitealias = $_POST['sitealias'];





$dup = mysqli_query($con,"select * from sitemast where sitename ='$sitename'");

  if (mysqli_num_rows($dup) > 0)
   {
    echo "<script>alert('This name is already exist')</script>";
   }
   else{





$query = "INSERT INTO sitemast (sitename,sitecode,sitealias) VALUES ('$sitename','$sitecode','$sitealias')";

if (mysqli_query($con,$query))
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
  <title></title>
  <?php include ('index.php') ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  
}
</style>
</head>
<body>
  <div class="tab" style="width: 87%; margin-left: 180px; margin-top: 30px;">
  <button class="tablinks" onclick="openCity(event, 'site')" id="defaultOpen">Site</button>
 <!-- <button class="tablinks" onclick="openCity(event, 'buy')">Buying</button>
  <button class="tablinks" onclick="openCity(event, 'sell')">Selling</button>-->
</div>
<form action="" method="post">
<div id="site" class="tabcontent" style="margin-left: 190px;margin-top: 20px;">
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Site Name</label>
       <input type="text" name="sitename" required="" style="margin-left: 10px;">
      <label style="margin-left: 80px;">Site Code</label>
        <input type="text" name="sitecode" style="margin-left: 10px; width: 182px;">
            
      <label style="margin-left: 80px;">Site Alias</label>
      <input type="text" name="sitealias" style="margin-left: 10px;">
    </div>
  </div>
  
  </div>
  

  <div class="jumbotron" style="margin-left: 190px; width: 1242px; height: 250px; margin-top: 50px; padding-top: 10px;">---Extra Fields---</div>

  
  


<div class="form-group text-center">
            
            <input type="submit" accesskey="t" class="btn btn-danger" value="Save" name="sub" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <input type="submit" class="btn btn-danger" value="Customize" name="cus" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <a href="sitedisplay.php"><input type="close" class="btn btn-danger" value="Close" name="cls" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);"></a>
            
            
          </div>


</form>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



</body>
</html>