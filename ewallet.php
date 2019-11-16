<?php
session_start();
require_once 'dbconnect.php';



if (isset($_SESSION['userSession'])!="") {
      require('header_log.php'); 
}
else{
    require('header.php');
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <center>
    <div style="font-size:100px;padding-top:12%;">
    COMING SOON......
    </div>
    </center>
    </body>
</html>