<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="look.css" >
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Josefin+Slab:wght@700&family=Niconne&family=Righteous&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400&display=swap" rel="stylesheet">
   <title>tops</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="/path/to/masonry.pkgd.min.js"></script>
  </head>
  <body>
    <?php
include  "navbar.php";

?>
<div class="row">
  <div class="column">

  <img src="top11.jpg">
    <h2>Rs 1000</h2>
    <form method="POST">
    <input type="submit" name="top1" value="CART">
    </form>
    <img src="top1.jpg">
    <h2>Rs 2000</h2>
    <input type="submit" value="out of stock">
    <img src="top2.jpg">
    <h2> Rs 1400</h2>
    <input type="submit"  value="out of stock">
    <img src="top3.jpg">
    <h2>Rs 600</h2>
    <input type="submit"  value="out of stock">
    <img src="top4.jpg">
    <h2>Rs 900</h2>
    <input type="submit" value="out of stock">
</div>

  <div class="column">

    <img src="top21.jpg">
    <h2>Rs 2000</h2>
     <form method="POST">
    <input type="submit" name="top2" value="CART">
     </form>
    <img src="top5.jpg">
    <h2>Rs 2000</h2>
    <input type="submit" value="out of stock">
    <img src="top6.jpg">
    <h2> Rs 1400</h2>
    <input type="submit"  value="out of stock">
    <img src="top7.jpg">
    <h2>Rs 600</h2>
    <input type="submit" value="out of stock">
    <img src="top8.jpg">
    <h2>Rs 900</h2>
    <input type="submit" value="out of stock">
    <img src="top20.jpg">
    <h2>Rs 900</h2>
    <input type="submit" value="out of stock">

  </div>
  <div class="column">
    <img src="top17.jpg">
    <h2>Rs 1500</h2>
     <form method="POST">
    <input type="submit" name="top3" value="CART">
  </form>
    <img src="top9.jpg">
    <h2>Rs 2000</h2>
    <input type="submit" value="out of stock">
    <img src="top10.jpg">
    <h2> Rs 1400</h2>
    <input type="submit"  value="out of stock">
    
    <img src="top12.jpg">
    <h2>Rs 900</h2>
    <input type="submit" value="out of stock">
     <img src="top13.jpg">
    <h2>Rs 1000</h2>
    
    <input type="submit" name="top1" value="out of stock">
  
  </div>
  <div class="column">

    <img src="top19.jpg">
    <h2>Rs 2500</h2>
     <form method="POST">
    <input type="submit" name="top4" value="CART">
  </form>
    <img src="top22.jpg">
    <h2>Rs 2000</h2>
    <input type="submit" value="out of stock">
    <img src="top14.jpg">
    <h2> Rs 1400</h2>
    <input type="submit"  value="out of stock">
    <img src="top15.jpg">
    <h2>Rs 600</h2>
    <input type="submit"  value="out of stock">
    <img src="top16.jpg">
    <h2>Rs 900</h2>
    <input type="submit" value="out of stock">

  </div>
</div>
 <?php
include  "connect_cart.php";

?>

<?php
if(isset($_POST['top1'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('zara',1000)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>

<?php
if(isset($_POST['top2'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('H&M',1500)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>

<?php
if(isset($_POST['top3'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('nike',2000)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>
 <?php
if(isset($_POST['top4'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('Jimmy Choo',2500)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>


 <script>
   var navbar = document.getElementById("navbar")
   window.onscroll= function(){
     "use strict";
     if(document.body.scrollTop >= 200){
       navbar.classList.add("nav-colored");
       navbar.classList.remove("nav-transperent");
     }
     else{
       navbar.classList.add("nav-transperent");
       navbar.classList.remove("nav-colored");
     }
   }
 </script>




 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
