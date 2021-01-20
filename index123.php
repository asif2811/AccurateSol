<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/styles.css">
<!-------Starting files Ended----->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


<title>Accurate Software</title>

  </head>
      <body>

 <style>
          
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'poppins', sans-serif;
  color: grey;
}

.sidebar{
  position: fixed;
  width: 180px;
  height: 100%;
  left: 0px;
  background: #1b1b1b;

}

.sidebar .text {
  color: grey;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: black;
  letter-spacing: 1px;
}

nav ul{
  background: lightgrey;
  height: 100%;
  width: 100%;
  list-style: none;
}

nav ul li {
  line-height: 60px;
  border-bottom: 1px solid darkgrey;
}

nav ul li : last-child{
  border-bottom: 1px solid;
}

nav ul li a {
  position: relative;
  color: cyan;
  text-decoration: none;
  font-size: 14px;
  padding-left: 40px;
  font-weight: 500;
  display: block;
  width: 100%;
  border-left: 3px solid transparent;
  
}

nav ul li.active a{
  color: black;
  background: lightgrey;
  border-left-color: black;
  
}

nav ul ul{
  position: static;
  display: none;
}

nav ul .feat-show.show {
  display: block;
}



nav ul ul li {
  line-height: 42px;
  border-bottom: none;
}


nav ul ul li a {
  font-size: 17px;
  color: #e6e6e6;
  padding-left: 80px;
}

nav ul li .active ul li a{
  color: black;
  background: lightgrey;
  border-left-color: transparent;
  
}

nav ul ul li a:hover{
  color: cyan!important;
  background: lightgrey!important;
  
  
}



nav ul li a span{
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 25px;
  transition: 0.4s;
}

nav ul li a span .rotate {
  transform: translateY(-50%) rotate(-180deg);
}




</style>

<div class="jumbotron" style="height: 90px; width: 100%; background: lightgrey;">
      <img src="accuratelogo.jpg">
      <H4 style="padding: -10px;margin-left: 30px;">ACCURATE</H4>
    </div>
    
    
<nav class="sidebar">
  <div class="text">Menu</div>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#" class="feat-btn">Master
      <span class="fas fa-caret-down first"></span>

    </a>
      <ul class="feat-show">
        <li><a href="acctdisplay.php">Account</a></li>
        <li><a href="display.php">Product</a></li>
        <li><a href="deptdisplay.php">Department</a></li>
      </ul>
    </li>
    <li><a href="">Transaction</a></li>
  </ul>
  
</nav>
            

<script>
  $('.feat-btn').click(function(){
    $('nav ul .feat-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
  });

  $('nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass("active");
  })

</script>
  

  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>