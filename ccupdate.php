<?php 

  include('connect.php');


$id = $_GET['id'];
$selectquery = "select * from costmast where id = $id";
$editquery = mysqli_query($con,$selectquery);
$updresult = mysqli_fetch_assoc($editquery);





if (count($_POST)!=0)
{
  extract($_POST);
  extract($_GET);
  $queryupdate = "UPDATE costmast SET costname = '$costname', costcode = '$costcode', costalias = '$costalias' WHERE id='$id'";
  $result = mysqli_query($con,$queryupdate);
  if ($result==true)
   {
    echo "Saved";
   }
   else
   {
    echo "failed";
   }


echo "<meta http-equiv='refresh' content='0'>";


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
  <button class="tablinks" onclick="openCity(event, 'cost')" id="defaultOpen">Costcenter</button>
 <!-- <button class="tablinks" onclick="openCity(event, 'buy')">Buying</button>
  <button class="tablinks" onclick="openCity(event, 'sell')">Selling</button>-->
</div>
<form action="" method="post" id="upd">
<div id="cost" class="tabcontent" style="margin-left: 190px;margin-top: 20px;">
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Costcenter Name</label>
       <input type="text" name="costname" value="<?php echo $updresult['costname'] ?>" style="margin-left: 10px;">
      <label style="margin-left: 80px;">Costcenter Code</label>
        <input type="text" name="costcode" value="<?php echo $updresult['costcode'] ?>"style="margin-left: 10px; width: 182px;">
            
      <label style="margin-left: 80px;">Costcenter Alias</label>
      <input type="text" name="costalias" value="<?php echo $updresult['costalias'] ?>" style="margin-left: 10px;">
    </div>
  </div>
  
  </div>
  

  <div class="jumbotron" style="margin-left: 190px; width: 1242px; height: 250px; margin-top: 50px; padding-top: 10px;">---Extra Fields---</div>

  
  


<div class="form-group text-center">
            
            <input type="submit" accesskey="t" class="btn btn-danger" value="Save" name="sub" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <input type="submit" class="btn btn-danger" value="Customize" name="cus" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <a href="ccdisplay.php"><input type="close" class="btn btn-danger" value="Close" name="cls" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);"></a>
            
            
          </div>


</form>
  

<script>
function myFunction() {
  document.getElementById("upd").reset();
}
</script>



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


