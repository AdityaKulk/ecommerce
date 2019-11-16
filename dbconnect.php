<?php

$DBcon = new mysqli("localhost", "root", "", "ecommerce");

if ($DBcon->connect_errno) {
    die ("Error: ". $DBcon->connect_error);
}
?>