<?php
require 'con.php';
if(isset($_POST["submit"])){
    $Name= $_POST["Name"];
    $Password = $_POST["Password"];
    $ConfirmPassword = $_POST["ConfirmPassword"];
    $Email = $_POST["Email"];
    $duplicate = mysqli_query($conn, "SELECT * FROM samreen  WHERE Email='$Email' OR Password='$Password'");
    if(mysqli_num_rows($duplicate) > 0){
        echo 
        "<script> alert('Name or Email has already Taken');</script>";
    }
    else{
        if($Password == $ConfirmPassword){
            $query = "INSERT INTO samreen VALUES('$Name','$Password','$ConfirmPassword','$Email')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Registration Sucessful');</script>";
           }
        else{
            echo
            "<script> alert('password Does Not Matched');</script>";
        }
    }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scake=1">
        <title>PHP CRUD OPERATIONS</title>
        <link rel="stylesheet" type="text/css" href="bb.css">
    </head>
    <body class="change">
      <div class="container">
        <div class="title">
            Registration Form 
        </div>
    <form method="POST">
        <div class="form">
            <div class="input_field">
              <label>Name</label>
              <input type="text" class="input" name="Name" id="Name" required>
        </div>
        <div class="input_field">
            <label>Password</label>
            <input type="password" class="input" name="Password" id="Password" required>
        </div>
        <div class="input_field">
            <label>ConfirmPassword</label>
            <input type="password" class="input" name="ConfirmPassword" id="ConfirmPassword" required>
        </div>
        <div class="input_field">
            <label>Email</label>
            <input type="email" class="input" name="Email" id="Email" required>
        </div>
        <button type="submit" name="submit"  class="submit" id="submit"> register</button>
        <a href="login.php" class="login" id="login">login</a>
        </div>
        </form> 
        </body>
        </html>
       