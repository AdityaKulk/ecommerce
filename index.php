<?php 

session_start();
require_once 'dbconnect.php';

//If already logged in. Show success page.
if (isset($_SESSION['userSession'])!="") {
 header("Location: header_user.php");
 exit;
}
?>


<!DOCTYPE html>
<html>
<head>
  

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="bg"></div>
<div style="padding-top:20px;padding-left:10px;background-color:black;">
<form action="yourcart.php" method="POST"><button type="submit" class="cart" id="cart1" ><img src="img/cart.jpg" style="width:40px;height:40px;float:left">Cart</button></form>
<form>
  <input type="text" name="search" placeholder="Search here for products by name,category,etc....">

</form>

<div class="navBar">
  
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="men.php" class="dropbtn">Men</a>
          <div class="dropdown-content">
              <div class="imgnav">
                  <a href="#">Top Wear</a>
                  <div class="imgnav-content">
                    <img src="img/topwear.jpg" alt=" " width="300" height="200">
                    <div class="imgdesc">Shirts<br>T-Shrits<br>Sweatshirts<br>Blazers<br>More....</div>
                  </div>
                </div>
                <div class="imgnav">
                    <a href="#">Bottom Wear</a>
                    <div class="imgnav-content">
                      <img src="img/bottomwear.jpg" alt=" " width="300" height="200">
                      <div class="imgdesc">Jeans<br>Trousers<br>Trackpants<br>More....</div>
                    </div>
                  </div>
                  <div class="imgnav">
                      <a href="#">Foot Wear</a>
                      <div class="imgnav-content">
                        <img src="img/footwear.jpg" alt=" " width="300" height="200">
                        <div class="imgdesc">Shoes<br>Sandals<br>Slippers<br>Loafers<br>More....</div>
                      </div>
                    </div>
                    <div class="imgnav">
                        <a href="#">Accessories</a>
                        <div class="imgnav-content">
                          <img src="img/accessories.jpg" alt=" " width="300" height="200">
                          <div class="imgdesc">Backpacks<br>Belts<br>Wallets<br>Sunglasses<br>More....</div>
                        </div>
                      </div>
                    
              
              
          </div>
        </li>
        <li class="dropdown">
            <a href="women.php" class="dropbtn">Women</a>
            <div class="dropdown-content">
                <div class="imgnav">
                    <a href="#">Top Wear</a>
                    <div class="imgnav-content">
                      <img src="img/wtop.jpg" alt="" width="300" height="200">
                      <div class="imgdesc"></div>
                    </div>
                  </div>
                  <div class="imgnav">
                      <a href="#">Bottom Wear</a>
                      <div class="imgnav-content">
                        <img src="img/wbottom.jpg" alt="" width="300" height="200">
                        <div class="imgdesc"></div>
                      </div>
                    </div>
                    <div class="imgnav">
                        <a href="#">Foot Wear</a>
                        <div class="imgnav-content">
                          <img src="img/wfootwear.jpg" alt="" width="300" height="200">
                          <div class="imgdesc"></div>
                        </div>
                      </div>
                      <div class="imgnav">
                          <a href="#">Accessories</a>
                          <div class="imgnav-content">
                            <img src="img/waccess.jpg" alt="" width="300" height="200">
                            <div class="imgdesc"></div>
                          </div>
                        </div>
                       
                
            </div>
          </li>
          <li class="dropdown">
              <a href="appliances.php" class="dropbtn">Appliances</a>
              <div class="dropdown-content">
                  <div class="imgnav">
                      <a href="#">TV's</a>
                      <div class="imgnav-content">
                        <img src="img/tv.jpg" alt=" " width="300" height="200">
                        <div class="imgdesc">24 and below<br>24 to 32 <br>32 to 42 <br> 42 and above <br>More....</div>
                      </div>
                    </div>
                    <div class="imgnav">
                        <a href="#">Refrigirators</a>
                        <div class="imgnav-content">
                          <img src="img/fridge.jpg" alt= "" width="300" height="200">
                          <div class="imgdesc">Single door<br>Double door<br>Side by side<br>More....</div>
                        </div>
                      </div>
                      <div class="imgnav">
                          <a href="#">Washing Machines</a>
                          <div class="imgnav-content">
                            <img src="img/wm.jpg" alt="" width="300" height="200">
                            <div class="imgdesc">Front Load<br>Top-Load<br>More....</div>
                          </div>
                        </div>
                        <div class="imgnav">
                            <a href="#">Air-Conditioners</a>
                            <div class="imgnav-content">
                              <img src="img/AC.jpg" alt="" width="300" height="200">
                              <div class="imgdesc">1-1.5 ton <br> 1.5- above <br>More....</div>
                            </div>
                          </div>
                         
              </div>
            </li>
            <li class="dropdown">
                <a href="electronics.php" class="dropbtn">Electronics</a>
                <div class="dropdown-content">
  
                    <div class="imgnav">
                        <a href="#">Mobiles</a>
                        <div class="imgnav-content">
                          <img src="img/mobiles.jpg" alt="" width="300" height="200">
                          <div class="imgdesc"></div>
                        </div>
                      </div>
                      <div class="imgnav">
                          <a href="#">Laptops</a>
                          <div class="imgnav-content">
                            <img src="img/laptops.jpg" alt="" width="300" height="200">
                            <div class="imgdesc"></div>
                          </div>
                        </div>
                        <div class="imgnav">
                            <a href="#">Tablets</a>
                            <div class="imgnav-content">
                              <img src="img/tablets.jpg" alt="" width="300" height="200">
                              <div class="imgdesc"></div>
                            </div>
                          </div>
                          <div class="imgnav">
                              <a href="#">Accessories</a>
                              <div class="imgnav-content">
                                <img src="img/eaccess.png" alt="" width="300" height="200">
                                <div class="imgdesc"></div>
                              </div>
                            </div>
                            
                </div>
              </li> 
              
              <li class="dropdown">
                  <a href="ewallet.php" class="dropbtn">e-Wallet</a>
                  <div class="dropdown-content">
    
                      <div class="imgnav">
                          <a href="#"> Check Balance <br> </a>
                        
                            
                
                  </div>
                </li>
              <li class="dropdown">
                  <a href="login.php" class="dropbtn">Login</a>
                  <div class="dropdown-content">
    
                      <div class="imgnav">
                          <a href="register.php">New User?? <br> Sign up.....</a>
                        
                
                  </div>
                </li>
             
      </ul>
  
</div>
</div>


<div class="slideshow-container">

<div class="mySlides fade">
 <a href="women.php"> <img src="img/img.jpg" style="width:100%" ></a>
  <div class="text">SUMMER COLLECTION</div>
</div>

<div class="mySlides fade">
<a href="electronics.php">  <img src="img/elec.jpg"  style="width:100%" ></a>
  <div class="text">ELECTRONICS AT GREAT PRICES</div>
</div>

<div class="mySlides fade">
<a href="men.php">  <img src="img/banner2.jpg" style="width:100%"  ></a>
  <div class="text">MEN'S WEAR SUMMER COLLECTION</div>
</div>

<div class="mySlides fade">
<a href="women.php"> <img src="img/banner4.jpg" style="width:100%"  ></a>
  <div class="text">EXCLUSIVE WOMEN'S FOOTWEAR COLLECTION</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>

<script>

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 4 milli seconds
}
</script>




<section>
    <div id="new"><b> NEW ARRIVALS </b></div>
    <div style="padding-top: 40px;">
    <div class="gallery">
      <a target="_blank" href="#">
        <img src="img/m1.jpg" alt="" style="height:300px;">
      </a>
      <div class="desc">Formal Blue Shirt</div>
    </div>
    
    <div class="gallery">
      <a target="_blank" href="#">
        <img src="img/m2.jpg" alt=" " style="height:300px;">
      </a>
      <div class="desc">Full Sleev Hoodie</div>
    </div>
    
    <div class="gallery">
      <a target="_blank" href="#">
        <img src="img/dell1.jpg" alt="" style="height:300px;" >
      </a>
      <div class="desc">Dell Inspiron 7000</div>
    </div>
    
    <div class="gallery">
      <a target="_blank" href="#">
        <img src="img/m4.jpg" alt="" style="height:300px;">
      </a>
      <div class="desc">Full Sleev T-Shrit</div>
    </div>
    
    </div>
    
    <div id="new"  style=" padding-top:450px;" ><b> WHAT'S TRENDING </b></div>
    <div class="parallax" style="padding-top:40px; "> 
    
    <div class="gallery">
      <a target="_blank" href="#">
        <img src="img/m1.jpg" alt="" style="height:300px;">
      </a>
      <div class="desc">Formal Blue Shirt</div>
    </div>
    
    <div class="gallery">
      <a target="_blank" href="#">
        <img src="img/m2.jpg" alt=" " style="height:300px;">
      </a>
      <div class="desc">Full Sleev Hoodie</div>
    </div>
    
    <div class="gallery">
      <a target="_blank" href="#">
        <img src="img/dell1.jpg" alt="" style="height:300px;" >
      </a>
      <div class="desc">Dell Inspiron 7000</div>
    </div>
    
    <div class="gallery">
      <a target="_blank" href="#">
        <img src="img/m4.jpg" alt="" style="height:300px;">
      </a>
      <div class="desc">Full Sleev T-Shrit</div>
    </div>
  </div>


</section>

<div id="new"><b>Best Selling Moblies</b></div>
<div style="padding-top: 40px;">
<div class="gallery">
  <a target="_blank" href="#">
    <img src="img/iphonex.jpg" alt="" style="height:300px;">
  </a>
  <div class="desc">Nokia 8</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="img/op5.jpg" alt="" style="height:300px;">
  </a>
  <div class="desc">One-Plus 5</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="img/iphone8.jpg" alt="" style="height:300px;" >
  </a>
  <div class="desc">iPhone X</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="img/note8.jpg" alt="" style="height:300px;">
  </a>
  <div class="desc">Samsung Galaxy Note 8</div>
</div>

</div>


<footer >
  <div style="padding-top:500px;">
    <hr>
      <p style="text-align:end">&copy; Abhin S Lingamaneni /Adarsh Mishra /Aniket Kumar  . </p>
</footer>

</body>
</html>
