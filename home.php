<?php include_once('login.php'); ?>
<?php include('SignUp.php'); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>askq</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/askq_css_1.css">
</head>

<body class="bg">

<div class="container">
  <img class="askqqq" src="image/askqqq.png">
<!--
  <div class="search">
     <form name="search" action="" onsubmit="validateForm()" method="post">
       <input class="search" type="text" name="Search" placeholder=" ASKQ">
       
       <button class="searchButton" type="button" name="searchButton" placeholder="Search">Search</button>
     </form>
  </div>
-->
  <div class="groove">
    <form action="home.php" method="post">
     <div class="container_2">
       <table class="loginForm">
          <tr><td>User Name:</td></tr>
          <tr>
            <td><input class="userName" type="text" name="username" placeholder="User Name" required></td>
          </tr>
          <tr>
            <td>Password:</td>
          </tr>
          <tr>
            <td> <input class="userName" type="password" name="password" placeholder="Password" required></td>
          </tr>
          <tr>
            <td><input type="checkbox" checked="checked"> Remember me</td>
          </tr>
          <tr>
            <td><button class="loginBtn" name="login">Login</button></td>
            <td>Forget <a href="#">Password?</a></td>
          </tr>
        </table>
      </div>
    </form>
    <!-- Registration Form -->
     <button class="registerHere" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register Here</button>
  </div>

<!-- inside registerHere -->
 <div id="id01" class="modal">
  
    <form class="modal-content animate" action="index.php" method="POST">
           <!-- cancle button -->
           <div class="closeBtn">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

    <div class="signupContainer">
      <div class="signupForm">
      <label><b>First Name</b></label><br>
      <input class="txt" type="text" name="fname" placeholder="First Name" required><br>

      <label><b>Last Name</b></label><br>
      <input class="txt" type="text" name="lname" placeholder="Last Name" required><br>

      <label><b>Username</b></label><br>
      <input class="txt" type="text" placeholder="Username" name="uname" required><br>

      <label><b>Password</b></label><br>
      <input class="txt" type="password" placeholder="Password" name="pwd" required><br>

      <label><b>Retype Password</b></label><br>
      <input class="txt" type="password" name="rpwd" placeholder="Retype Password"><br>
      <button class="signUpBtn" type="submit" name="signUp">Sign up</button>
      <span class="r_me"><input type="checkbox" checked="checked"> Remember me </span>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>