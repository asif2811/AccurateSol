<?php 

  include('connect.php');

if (isset($_POST['sub'])) {

$acctname = $_POST['acctname'];
$accttype = $_POST['accttype'];
$accode = $_POST['accode'];
$acctalias = $_POST['acctalias'];
$credlmt = $_POST['credlmt'];
$creddays = $_POST['creddays'];
$acaddr = $_POST['acaddr'];
$accity = $_POST['accity'];
$accont = $_POST['accont'];




$dup = mysqli_query($con,"select * from acctmast where acctname ='$acctname'");

  if (mysqli_num_rows($dup) > 0)
   {
    echo "<script>alert('This name is already exist')</script>";
   }
   else{





$query = "INSERT INTO acctmast (acctname,accttype,accode,acctalias,credlmt,creddays,acaddr,accity,accont) VALUES ('$acctname','$accttype','$accode','$acctalias','$credlmt','$creddays','$acaddr','$accity','$accont')";

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
  <div class="tab" style="width: 87%; margin-left: 180px;margin-top: 10px;">
  <button class="tablinks" onclick="openCity(event, 'acct')" id="defaultOpen">Accounts</button>
 <!-- <button class="tablinks" onclick="openCity(event, 'buy')">Buying</button>
  <button class="tablinks" onclick="openCity(event, 'sell')">Selling</button>-->
</div>
<form action="" method="post">
<div id="acct" class="tabcontent" style="margin-left: 190px;margin-top: 20px;">
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Account Name</label>
       <input type="text" name="acctname" style="margin-left: 10px;">
      <label style="margin-left: 80px;">Account Type</label>
        <select type="text" name="accttype" style="margin-left: 10px; width: 182px;">
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
      <input type="text" name="accode" style="margin-left: 10px;">
    </div>
  </div>
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Account Alias</label>
      <input type="text" name="acctalias" style="margin-left: 17px;">
      <label style="margin-left: 80px;">Credit Limit</label>
      <input type="text" name="credlmt" style="margin-left: 25px;">
      <label style="margin-left: 80px;">Credit Days</label>
      <input type="text" name="creddays" style="margin-left: 27px;">
      
      
    </div>
  </div>
  <div class="row">
    <div class="form-group" style="margin: 10px;">
      <label>Address</label>
      <input type="text" name="acaddr" style="margin-left: 55px;">
      <label style="margin-left: 80px;">City</label>
      <input type="text" name="accity" style="margin-left: 77px;">
      <label style="margin-left: 80px;">Contact</label>
      <input type="text" name="accont" style="margin-left: 55px;">
      
      
    </div>
  </div>

  <div class="jumbotron" style="margin-left: -15px; width: 1242px; height: 250px; margin-top: 50px; padding-top: 10px;">---Extra Fields---</div>

  
  
</div>

<div id="buy" class="tabcontent" style="margin-left: 370px; margin-top: 30px;">
  <div class="row">
    <div class="form-group">
      <label>Buying</label>
      <input type="text" name="purzero" style="margin-left: 10px;">
      <label style="margin-left: 50px;">Buy1</label>
      <input type="text" name="purone" style="margin-left: 10px;">
      <label style="margin-left: 50px;">Buy2</label>
      <input type="text" name="purtwo" style="margin-left: 10px;">
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <label>Buy3</label>
      <input type="text" name="purthree" style="margin-left: 23px;">
      <label style="margin-left: 50px;">Buy4</label>
      <input type="text" name="purfour" style="margin-left: 10px;">
      <label style="margin-left: 50px;">Buy5</label>
      <input type="text" name="purfive" style="margin-left: 10px;">
    </div>
  </div>
</div>

<div id="sell" class="tabcontent" style="margin-left: 370px; margin-top: 30px;">
  <div class="row">
    <div class="form-group">
      <label>Selling</label>
      <input type="text" name="sellzero" style="margin-left: 23px;">
      <label style="margin-left: 50px;">Sell1</label>
      <input type="text" name="sellone" style="margin-left: 10px;">
      <label style="margin-left: 50px;">Sell2</label>
      <input type="text" name="selltwo" style="margin-left: 10px;">
    </div>
  </div>
  <div class="row">
      <div class="form-group">
        <label>Sell3</label>
        <input type="text" name="sellthree" style="margin-left: 35px;">
        <label style="margin-left: 50px;">Sell4</label>
        <input type="text" name="sellfour" style="margin-left: 10px;">
        <label style="margin-left: 50px;">Sell5</label>
        <input type="text" name="sellfive" style="margin-left: 10px;">
      </div>
  </div>
</div>

<div class="form-group text-center">
            
            <input type="submit" accesskey="t" class="btn btn-danger" value="Save" name="sub" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <input type="submit" class="btn btn-danger" value="Customize" name="cus" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);">
            <a href="acctdisplay.php"><input type="close" class="btn btn-danger" value="Close" name="cls" style="width: 140px; height: 35px; background: linear-gradient(to bottom, blue, #ffffff);"></a>
            
            
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