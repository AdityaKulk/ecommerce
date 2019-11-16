
<?php 

session_start();


if (isset($_SESSION['userSession'])!="") {
 header("Location: index.php");
}
require_once 'dbconnect.php';


//If user click sign up button. Get all information below.
if(isset($_POST['btn-signup'])) {
 
 $userName = strip_tags($_POST['username']);
 $userPass = strip_tags($_POST['password']);
 $customerName = strip_tags($_POST['customerName']);
 $customerAddress = strip_tags($_POST['customerAddress']);
 $customerPhone = strip_tags($_POST['customerPhone']);
 $customerEmail = strip_tags($_POST['customerEmail']);
 


 $userName = $DBcon->real_escape_string($userName);
 $userPass = $DBcon->real_escape_string($userPass);
 $customerName = $DBcon->real_escape_string($customerName);
 $customerAddress = $DBcon->real_escape_string($customerAddress);
 $customerPhone = $DBcon->real_escape_string($customerPhone);
 $customerEmail = $DBcon->real_escape_string($customerEmail);


 $hashed_password = password_hash($userPass, PASSWORD_DEFAULT); 

 //To check if username or email has not been taken.
 $check_username = $DBcon->query("SELECT customerEmail FROM Customer WHERE userName='$userName'");
 $check_email = $DBcon->query("SELECT customerEmail FROM Customer WHERE customerEmail='$customerEmail'");
 
 $count=$check_email->num_rows + $check_username->num_rows;
 
 $c_id=$DBcon->query("SELECT cid FROM Customer");


 //count = 0 means both email and username not registed yet. Can use.
 if ($count==0) { 
  
  $query = "INSERT INTO Customer(cid,userName,userPassword,customerName,customerAddress,customerPhone,customerEmail) VALUES('$c_id->num_rows','$userName','$hashed_password','$customerName','$customerAddress','$customerPhone','$customerEmail')";
  
  if ($DBcon->query($query)) {
   $msg = "<div>
           <h3 style=\"color: red\"> &nbsp; Successfully registered !</h3>
           </div>";
  }
  
  else {
   $msg = "<div>
           <h3 style=\"color: red\">&nbsp; error while registering !</h3>
           </div>";
  }
  
 }
 
 //Otherwise, email is already taken. Cannot use.
 else {
  
  
  $msg = "<div>
          <h3 style=\"color: red\"> &nbsp; Sorry email or username already taken !</h3>
          </div>";
   
 }
 
 $DBcon->close();
}
?>



<!-- body -->
<center>

       <form method="post" id="register-form">
      
        <h2>Sign Up</h2>
        
    
        
        <?php
             if (isset($msg)) {
                    echo $msg;
             }
        ?>

        <div>
        <input style="width: 25%; height: 10%; border-radius: 5px;" type="text" placeholder=" Username" name="username" required  />
        </div><br>

        
        <div>
        <input style="width: 25%; height: 10%; border-radius: 5px;" type="password"  placeholder="Password" name="password" required  />
        </div><br>

        
        <div>
        <input style="width: 25%; height: 10%; border-radius: 5px;" type="email"  placeholder="Email address" name="customerEmail" required  />
        <span id="check-e"></span>
        </div><br>

        
        <div>
        <input style="width: 25%; height: 10%; border-radius: 5px;" type="text"  placeholder="Name" name="customerName" required  />
        </div><br>


        <div>
        <input style="width: 25%; height: 10%; border-radius: 5px;" type="text" placeholder="Address" name="customerAddress" required  />
        </div><br>


        <div>
        <input style="width: 25%; height: 10%; border-radius: 5px;" type="text" placeholder="Phone number" name="customerPhone" required  />
        </div>
             
        
      

        
        <div>
        <br>
        <button style="width: 25%; height: 10%;" type="submit" name="btn-signup">
        <span></span> &nbsp; Create Account
        </button>
        <br>
        <br>
        <a id="login" href="login.php">Already have an account? Click  here to log in</a>    
        </div>
 
</center>

<?php require('footer.php'); ?>


