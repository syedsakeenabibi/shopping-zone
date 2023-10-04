<?php
require 'con.php';
if(isset($_POST["submit"])){
  $Email = $_POST["Email"];
  $Password= $_POST["Password"];
  $result = mysqli_query($conn, "SELECT *FROM samreen WHERE Email='$Email' OR Password='$Password'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($Password == $row["Password"]){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location:last.php");
    }
    else{
      echo 
      "<script> alert('wrong password');</script>";
    }
  }
  else{
    echo
    "<script> alert('user not registred');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration and Login Form</title>
  <link rel="stylesheet" type="text/css" href="aa.css  ">
</head>
<body>
<div class="form-container">
      <h2>Login Form</h2>
      <form class="" action="" method="POST" autocomplete="off">
        <input type="text" class="input" name="Email" id= "Email" placeholder="Email" required ><br>
        <input type="password" class="input" name="Password" id="Password" placeholder="Password" required ><br>
        <button type="submit"  name="submit" id="submit" class="input" >Login</button>
        </form>
        <br>
        <a href="reg.php">register</a><br> <br>
</div>
</body>
</html>