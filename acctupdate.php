<?php 

  include('connect.php');


$id = $_GET['id'];
$selectquery = "select * from acctmast where id = $id";
$editquery = mysqli_query($con,$selectquery);
$updresult = mysqli_fetch_assoc($editquery);





if (count($_POST)!=0)
{
  extract($_POST);
  extract($_GET);
  $queryupdate = "UPDATE acctmast SET acctname = '$acctname', accode = '$accode', accttype = '$accttype', acctalias = '$acctalias', credlmt = '$credlmt',creddays = '$creddays', acaddr = '$acaddr', accity = '$accity', accont = '$accont' WHERE id='$id'";
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
    <div class="tab" style="width: 87%; margin-left: 180px; margin-top:30px">
  <button class="tablinks" onclick="openCity(event, 'acct')" id="defaultOpen">Accounts</button>
 <!-- <button class="tablinks" onclick="openCity(event, 'buy')">Buying</button>
  <button class="tablinks" onclick="openCity(event, 'sell')">Selling</button>-->
</div>
<form action="" method="post" id="upd">
<div id="acct" class="tabcontent" style="margin-left: 190px;margin-top: 20px;">
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Account Name</label>
       <input type="text" name="acctname" value="<?php echo $updresult['acctname'] ?>" style="margin-left: 10px;">
      <label style="margin-left: 80px;">Account Type</label>
        <select type="text" name="accttype" value="<?php echo $updresult['accttype'] ?>" style="margin-left: 10px; width: 182px;">
            <option value="">Select</option>
            <option value="assets">Assets</option>
            <option value="liabilities">Liabilities</option>
            <option value="bank" >Bank account</option>
            <option value="cash">Cash/Petty cash account</option>
            <option value="cusven" >Customer/vendor account</option>
            <option value="emp" >Employee account</option>
            <option value="fixasset" >Fixed Assets</option>
            <option value="income" >Income account</option>
            <option value="expense" >Expense account</option>
            <option value="purchase" >Purchases account</option>
            <option value="sale" >Sales account</option>
            <option value="td" >TDS</option>
            <option value="tradexp">Trading Expenses</option>
            <option value="tradinc">Trading Income</option>                                                      
      </select>
      <label style="margin-left: 80px;">Account Code</label>
      <input type="text" name="accode" value="<?php echo $updresult['accode'] ?>" style="margin-left: 10px;">
    </div>
  </div>
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Account Alias</label>
      <input type="text" name="acctalias" value="<?php echo $updresult['acctalias'] ?>" style="margin-left: 17px;">
      <label style="margin-left: 80px;">Credit Limit</label>
      <input type="text" name="credlmt" value="<?php echo $updresult['credlmt'] ?>" style="margin-left: 25px;">
      <label style="margin-left: 80px;">Credit Days</label>
      <input type="text" name="creddays" value="<?php echo $updresult['creddays'] ?>" style="margin-left: 27px;">
      
      
    </div>
  </div>
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Address</label>
      <input type="text" name="acaddr" value="<?php echo $updresult['acaddr'] ?>" style="margin-left: 55px;">
      <label style="margin-left: 80px;">City</label>
      <input type="text" name="accity" value="<?php echo $updresult['accity'] ?>" style="margin-left: 77px;">
      <label style="margin-left: 80px;">Contact</label>
      <input type="text" name="accont" value="<?php echo $updresult['accont'] ?>" style="margin-left: 55px;">
      
      
    </div>
  </div>

  <div class="jumbotron" style="margin-left: -15px; width: 1242px; height: 250px; margin-top: 50px; padding-top: 10px;">---Extra Fields---</div>

  
  
</div>


<div class="form-group text-center">
            
            <input type="submit" accesskey="t" class="btn btn-danger" value="Save" name="sub" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <input type="submit" class="btn btn-danger" value="Customize" name="cus" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <a href="acctdisplay.php"><input type="close" class="btn btn-danger" value="Close" name="cls" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);"></a>
            
            
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


