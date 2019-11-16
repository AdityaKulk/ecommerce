<?php 

session_start();
require_once 'dbconnect.php';

//If already logged in. Show success page.
if (isset($_SESSION['userSession'])!="") {
      echo '<script>alert("already logged in..")</script>';
      header("Location: index.php");

 exit;
}



//If user click button login. Get username and password.
if (isset($_POST['btn-login'])) {
 
 $userName = strip_tags($_POST['username']);
 $userPass = strip_tags($_POST['password']);
 
 $userName = $DBcon->real_escape_string($userName);
 $userPass = $DBcon->real_escape_string($userPass);
 
 
 //Getting user information by using username. Then compare password.
 $query = $DBcon->query("SELECT cid, userName, userPassword FROM Customer WHERE userName='$userName'");
 $row=$query->fetch_array();
 
 //If user exists. $count must = 1.
 $count = $query->num_rows; 
 
 //Check if password is correct or not. If match, show success page.
 if (password_verify($userPass, $row['userPassword']) && $count==1) {
  $_SESSION['userSession'] = $row['cid'];
  $_SESSION['name']= $row['userName'];
  header("Location: index.php");
 }
 
 
 //If password not match, show error.
 else {
  $msg = "<div>
          <h3 style=\"color: red\"> &nbsp; Invalid Username or Password !</h3>
          </div>";
 }
 $DBcon->close();
}



?>





<center>
       <form method="post" id="login-form">
       
        <br>
      
        <h2 style="font-size:30px;">ADMIN Sign In.</h2>
        
      

        
      <?php
           if(isset($msg)) {
                 echo $msg;
           }
      ?>
        <div>
        <input style="width: 25%; height: 10%; border-radius: 5px;" type="text" placeholder="Enter your username" name="username" required />
        <span></span>
        </div><br>
        

        <div>
        <input style="width: 25%; height: 10%; border-radius: 5px;" type="password" placeholder="Enter your password" name="password" required />
        </div>
       

            <br>
            <button style="width: 25%; height: 10%" type="submit"  name="btn-login" id="btn-login">
            <span></span> &nbsp; Log In
            </button> 

           
      </form>

</center>

<?php require('footer.php'); ?>