<?php 

  include('connect.php');


$id = $_GET['id'];
$selectquery = "select * from prodmast where id = $id";
$editquery = mysqli_query($con,$selectquery);
$updresult = mysqli_fetch_assoc($editquery);





if (count($_POST)!=0)
{
  extract($_POST);
  extract($_GET);
  $queryupdate = "UPDATE prodmast SET prodname = '$prodname', prodcode = '$prodcode', prodtype = '$prodtype', prodalias = '$prodalias', minqty = '$minqty',purzero = '$purzero', purone = '$purone', purtwo = '$purtwo', purthree = '$purthree', purfour = '$purfour', purfive = '$purfive',sellzero = '$sellzero', sellone = '$sellone', selltwo = '$selltwo', sellthree = '$sellthree', sellfour = '$sellfour', sellfive = '$sellfive' WHERE id='$id'";
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
  <button class="tablinks" onclick="openCity(event, 'prod')" id="defaultOpen">Product</button>
  <button class="tablinks" onclick="openCity(event, 'buy')">Buying</button>
  <button class="tablinks" onclick="openCity(event, 'sell')">Selling</button>
</div>
<form action="" method="post" id="upd">
<div id="prod" class="tabcontent" style="margin-left: 190px;margin-top: 20px;">
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Product Name</label>
      <input type="text" name="prodname" value= "<?php echo $updresult['prodname'] ?>" style="margin-left: 10px;">
      <label style="margin-left: 80px;">Product Type</label>
      <select type="text" name="prodtype" value= "<?php echo $updresult['prodtype'] ?>" style="margin-left: 10px; width: 182px;">
        <option value="finished">Finished Goods</option>
        <option value="rm">Raw Material</option>
        <option value="service">Services</option>
      </select>
      <label style="margin-left: 80px;">Product Code</label>
      <input type="text" name="prodcode" value= "<?php echo $updresult['prodcode'] ?>" style="margin-left: 10px;">
    </div>
  </div>
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Product Alias</label>
      <input type="text" name="prodalias" value= "<?php echo $updresult['prodalias'] ?>" style="margin-left: 19px;">
      <label style="margin-left: 80px;">Min Quantity</label>
      <input type="text" name="minqty" value= "<?php echo $updresult['minqty'] ?>" style="margin-left: 15px;">
      
      
    </div>
  </div>

  <div class="jumbotron" style="margin-left: -15px; width: 1242px; height: 250px; margin-top: 50px; padding-top: 10px;">---Extra Fields---</div>

  
  
</div>

<div id="buy" class="tabcontent" style="margin-left: 370px; margin-top: 30px;">
  <div class="row">
    <div class="form-group">
      <label>Buying</label>
      <input type="text" name="purzero" value= "<?php echo $updresult['purzero'] ?>" style="margin-left: 10px;">
      <label style="margin-left: 50px;">Buy1</label>
      <input type="text" name="purone" value= "<?php echo $updresult['purone'] ?>" style="margin-left: 10px;">
      <label style="margin-left: 50px;">Buy2</label>
      <input type="text" name="purtwo" value= "<?php echo $updresult['purtwo'] ?>" style="margin-left: 10px;">
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <label>Buy3</label>
      <input type="text" name="purthree" value= "<?php echo $updresult['purthree'] ?>" style="margin-left: 23px;">
      <label style="margin-left: 50px;">Buy4</label>
      <input type="text" name="purfour" value= "<?php echo $updresult['purfour'] ?>" style="margin-left: 10px;">
      <label style="margin-left: 50px;">Buy5</label>
      <input type="text" name="purfive" value= "<?php echo $updresult['purfive'] ?>" style="margin-left: 10px;">
    </div>
  </div>
</div>

<div id="sell" class="tabcontent" style="margin-left: 370px; margin-top: 30px;">
  <div class="row">
    <div class="form-group">
      <label>Selling</label>
      <input type="text" name="sellzero" value= "<?php echo $updresult['sellzero'] ?>" style="margin-left: 23px;">
      <label style="margin-left: 50px;">Sell1</label>
      <input type="text" name="sellone" value= "<?php echo $updresult['sellone'] ?>" style="margin-left: 10px;">
      <label style="margin-left: 50px;">Sell2</label>
      <input type="text" name="selltwo" value= "<?php echo $updresult['selltwo'] ?>" style="margin-left: 10px;">
    </div>
  </div>
  <div class="row">
      <div class="form-group">
        <label>Sell3</label>
        <input type="text" name="sellthree" value= "<?php echo $updresult['sellthree'] ?>" style="margin-left: 35px;">
        <label style="margin-left: 50px;">Sell4</label>
        <input type="text" name="sellfour" value= "<?php echo $updresult['sellfour'] ?>" style="margin-left: 10px;">
        <label style="margin-left: 50px;">Sell5</label>
        <input type="text" name="sellfive" value= "<?php echo $updresult['sellfive'] ?>" style="margin-left: 10px;">
      </div>
  </div>
</div>

<div class="form-group text-center">
            
            <a href="display.php"><input type="submit" accesskey="t" class="btn btn-danger" value="Save" name="sub" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);"></a>

            <input type="submit" class="btn btn-danger" value="Customize" name="cus" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <a href="display.php"><input type="close" class="btn btn-danger" value="Close" name="cls" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);"></a>
            
            
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


