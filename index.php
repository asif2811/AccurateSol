<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">


    
    


      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="">
    <title></title>

    
  </head>
  <body style="background: white;">

<style>
    


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }



    nav {
      
      position: absolute;
      top: 0;
      bottom: 0;
      background: linear-gradient(to bottom, white,);
      border-radius: 10px;
      box-shadow: 5px 7px 10px rgba(0,0,0,.5)
    }
    nav ul {
      position: relative;
      list-style-type: none; 
    }

    nav ul li a {
      display: flex;
      align-items: center;
      font-family: arial;
      font-size: 1.00em;
      text-transform: capitalize;
      color: #000;
      padding: 10px 30px;
      height: 90px;
      transition: 5s 30px;
      text-decoration: none;

    }
nav ul li a:hover {
  background: rgba(0,0,0,0.7);
  color: lightgrey;
  text-decoration-line: none;
}

nav ul ul {
  position: absolute;
  left: 152px;
  width: 152px;
  top: 0;
  display: none;
  background: lightgrey;
  border-radius: 5px;
  box-shadow: 2px 2px 10px rgba(0,0,0,.1);
}

nav ul ul span {
  position: absolute;
  right: 20px;
  font-size: 1.5em;
}

nav ul ul .dropdown {
  position: relative;
}

nav ul .dropdown:hover ul {
  display: initial;
}



</style>




    
        
    <div class="container-fluid" style="height: 80px; width: 99.5%; background: linear-gradient(to bottom, white,);box-shadow: 5px 7px 10px rgba(0,0,0,.5)">
      <img src="logofined.png" style="height: 100%; width: 11%; margin-left: -17px;background: linear-gradient(to bottom, darkgrey, #ffffff);">
      <h2 style="text-align: center;margin-top: -40px;">Welcome to Accurate Solutionz</h2>
    </div>
    
    <nav style="height: 90%; margin-top: 82px; width: 154px;">
      <ul>
            <li><a href="" style="border-bottom: 1px solid; height: 90px;">Home</a></li>
            <li class="dropdown"><a href="" style="border-bottom: 1px solid;">Masters<span>&rsaquo;</span></a>
              <ul>
                <li><a href="acctdisplay.php" style="border-bottom: 1px solid; height: 50px;">Accounts</a></li>
                <li><a href="display.php" style="border-bottom: 1px solid; height: 50px;">Product</a></li>
                <li><a href="deptdisplay.php" style="border-bottom: 1px solid; height: 50px;">Department</a></li>
                <li><a href="ccdisplay.php" style="border-bottom: 1px solid; height: 50px;">Costcenter</a></li>
                <li><a href="whdisplay.php" style="border-bottom: 1px solid; height: 50px;">Warehouse</a></li>
                <li><a href="sitedisplay.php" style="border-bottom: 1px solid; height: 50px;">Site</a></li>
              </ul>
            </li>
            <li><a href="" style="border-bottom: 1px solid;height: 90px;">Transaction</a></li>
            <li><a href="" style="border-bottom: 1px solid;height: 90px;">Financial Report</a></li>
            <li><a href="" style="border-bottom: 1px solid;height: 90px;">Inventory Report</a></li>
            <li><a href="" style="border-bottom: 1px solid;height: 90px;">About</a></li>
          </ul>
        
    </nav>
    
  </body>
</html>