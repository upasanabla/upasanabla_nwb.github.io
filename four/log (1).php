<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="header.css" >
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Josefin+Slab:wght@700&family=Niconne&family=Righteous&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400&display=swap" rel="stylesheet">
   <title>nav</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

  </head>
<body>
  <?php
      include 'navbar.php';
      ?>

            <body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <hr>
    <font color="white"><h3>LOG IN</h3></font>
    <hr>


    <!-- Signup Form -->
    <form  method="POST">

      <input type="text" class="fadeIn third" name="email" placeholder="Email Id">
      <input type="text" class="fadeIn third" name="password" placeholder="Password">

        <hr>
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
      </form>

</div>

  </div>
      <?php

      include "useraccdetails.php";


      //First Name Validation
      if(isset($_POST['login']))
     {
         echo'<script>alert("hello")</script>';
      if($_POST['email']==$username && $_POST['password']==$pass)
      {
        echo'<script>alert("login Successfully")</script>';
        echo '<script>window.open("home.php","_self")</script>';

      }
      else
      {
         echo '<script>alert("Email ID or password is incorrect")</script>';
      }
    }


    ?>



</body>
</html>

            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
