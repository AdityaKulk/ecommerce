<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
#cart {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;

}

#cart td, #cart th {
    
    border: 1px solid #ddd;
    padding: 8px;
    text-align:center;
}


#cart tr:hover {background-color: #ddd;}

#cart th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align:center;
    background-color: #4CAF50;
    color: white;
}
#tbl{
    margin:3%;
}

</style>
    </head>
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


<div id="tbl">
    <table border=2 style="width: 100%;" id="cart">
    <tr>
    <th >Product Name</th>
    <th >Quantity</th>
    <th >Price Details</th>
    <th >Order Total</th>
    <th >Delete</th>
    </tr>

    <?php
	$total = 0;
    
    //If have something in the cart. Display it.
	if(!empty($_SESSION["cart"]))
	{
	
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr >
            <td style="background-color: #d3dcf2"><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td > &#8377;<?php echo $values["product_price"]; ?></td>
            <td > &#8377; <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td ><a id="delete" href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span><img src="img/delete.png"></span></a></td>
            </tr>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		
	}
	?>

    </table>
    </div>
	<center >
	<div style="background-color:orange;width:50%;height:50%;margin:2%;>" >
		<p style="padding-top:20px;"><u >Sub total:</u>  &#8377; <?php echo number_format($total,2); ?> </p>
		<p> <u>Tax(@18% GST):</u>  &#8377; <?php echo number_format($total*0.18,2); ?> </p>
		<h3>Total: &#8377; <?php echo number_format($total*1.18,2); ?> </h3>
		<h3  style="padding-bottom:20px;"><a id="checkout" href="checkout.php" style="color:white;"> Click here to check out</a></h3>
	</div>
	</center>







<?php require('footer.php'); ?>