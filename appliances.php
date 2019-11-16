<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    width:300px;

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
    $query = "SELECT * FROM Appliances ORDER BY productID ASC";
	$appliance = $DBcon->query($query);
	if($appliance->num_rows > 0) 
	{
		while($row = $appliance->fetch_array())
		{
			?>

<div class="card" style="display:inline-grid;">
<form method="post" action="shop.php?action=add&id=<?php echo $row["productID"]; ?>&page=<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <img id="imgx" src="<?php echo $row["productImage"]; ?>" alt="Avatar" style="width:100%">
  <div class="container">
  <h5><?php echo $row["productName"]; ?></h5>
  <h5> &#8377; <?php echo $row["productPrice"]; ?></h5>
  <input type="number" min="1" max="10" name="quantity" value="1">
  <input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>">
  <input type="hidden" name="hidden_price" value="<?php echo $row["productPrice"]; ?>"><br>
  <input type="submit" name="add" style="margin-top:5px;" value="Add to Cart" id="submit"> 
  </div>
  </form>
</div>

<?php
       }
    }
    
?>
<?php require('footer.php'); ?>


