<?php
require 'con.php';
$_SESSION = [];
session_unset();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
    <h1>HEY FOOL</h1>
    <a href="reg.php">register again</a>
</body>
</html>