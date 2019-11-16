<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>
.card {
   padding:5%;
    width: 33%;
    text-align:center;

}


.container {
    padding: 2px 16px;
}

#submit{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 30px;
    
}
#submit:hover{

  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}
#imgx{
    width:500px;
    height:500px;
}


</style>
    </head>
    <body>
    
    </body>
</html>




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





<?php

	//Display all products in Products table.
    $query = "SELECT * FROM items WHERE pid=(SELECT prodid from products WHERE prodname='Sports')";
	$men = $DBcon->query($query);
	if($men->num_rows > 0) 
	{
		while($row = $men->fetch_array())
		{
			?>

<div class="card" style="display:inline-grid;">
<form action="POST">
  <img id="imgx" src="<?php echo $row["ipic"]; ?>" alt="Avatar" style="width:100%">
  <div class="container">
  <h5><?php echo $row["iname"]; ?></h5>
  <h5> &#8377; <?php echo $row["price"]; ?></h5>
  <input type="number" min="1" max="10" name="quantity" value="1">
  <input type="hidden" name="hidden_name" value="<?php echo $row["iname"]; ?>">
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"><br>
  <input type="button" name="add" style="margin-top:5px;" value="Add to Cart" id="submit" onc> 
  </div>
  </form>
</div>



<?php
       }
    }
    
?>



<?php require('footer.php'); ?>