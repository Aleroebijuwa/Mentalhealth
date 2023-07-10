<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="style.css" >
</head>
<body>
<div class="con">
       <header> 
       <div class="picc">
                  <img src="IMG_1070.PNG" width="70" height="45"> 
                 </div>
            <div class="website_name">
              <a href="#" title="My Technical Website" style="color:white;">STARTUP HEALTH</a>
            </div>
            <nav>
              <!-- <a href="home.html" title="Our Home Page" style="color:white;">HOME</a>
              <a href="about.html" title="Click to read about us" style="color:white;">ABOUT US</a>
              <a href="ser.html" title="Click to view our services" style="color:white;">SERVICES</a>
              <a href="contacts.html" style="color:white;">CONTACT US</a> -->
              <a href="signin.php" style="color:white;"><button class="int">SIGN IN</button></a>
              <a href="signup.php" style="color:white;"><button class="int">SIGN UP</button></a> 
              <a href="about.php" style="color:white;"><button class="int">ABOUT US</button></a>
            </nav> 
            <!-- <div class="wrap_the_header_bottom">
        &copy; <b>STARTUP. -->
      
        </b>
      </div>
       </header> 
        </div><br><br><br><br>


  
    <div class="background-picture">   
     <h1 style="color: grey; font-size: 40; font-family:'Franklin Gothic Medium', Arial, sans-serif ;"> <b>
      NEED SOMEONE TO TALK TO?</b></h1>
      <p style="color:#424242; font-size: 30; font-family: 'Franklin Gothic Medium',  sans-serif;" > <br>WELCOME TO
       START UP COUNSELING <br> A COUNSELLING & MENTAL HEALTH SERVICE<br> We connect you to caring
        listeners for free emotional support.</p> 
      <a href="get.php"><button class="int">GET STARTED</button></a>
    </div>
  
   
  </br>
  <p id="show"></p>
  <script> 
  document.getElementById("show").innerHTML=Date();
  </script>

</br><br>
<marquee scroll="left" style="color:black;"><b>NEWS FLASH:</b> #ITS OKAY NOT TO BE OKAY/</marquee>
<b><p id="show"></p></b><br><br>
 





<style>
  .myslides {
    display:none;
  } 
  .radio{
    display: inline-block;
  }
</style>
<div class="w3-content w3-section">
   <img src="teens.jpg" class="myslides" width="100%" height="500">
   <!-- <input type="radio" class="radio"> -->
     <!-- <p>get better with us</p>
     <a href="get.php" ><button class="int"> get started ></button></a> -->
    </div>

    <div class="w3-content w3-section" >
      <img src="IMG_9434.jpg" class="myslides" width="100%" height="500">
      <!-- <input type="radio" class="radio"> -->
      <!-- <p>Grow at your own pace!</p>
     <a href="get.php" ><button class="int"> get started ></button></a> -->
    </div>

    <div class="w3-content w3-section" >
      <img src="threpisr.jpg" class="myslides" width="100%" height="500">
      <!-- <input type="radio" class="radio"> -->
    </div><br><br>
    <p style="color:#424242; font-size: 30; font-family: 'Franklin Gothic Medium',  sans-serif;" > Free24/7 chat<br> Be heard by volunteer listeners and,chat with others who understand and support you</p>
      <a href="signin.php"><button class="int" style=color:#424242;>More ></button></a>
</div>
   
<script>
  var myIndex =0;
  carousel();
  function carousel() {
    var i;
    var x =
    document.getElementsByClassName("myslides");
    for(i=0; i < x.length; i++){
      x[i].style.display="none";
    } 
    myIndex++;
    if (myIndex > x.length) {myIndex =1} 
    x[myIndex-1].style.display="block";
    setTimeout(carousel,2000);
  }
</script>
    <!-- <div class="images">
      <img src="teens.jpg" width="300" height="100">
     <p>get better with us</p>
     <a href="get.php" ><button class="int"> get started ></button></a>
    </div>

    <div class="images">
      <img src="images (2).jpg" width="300" height="100">
      <p>Grow at your own pace!</p>
     <a href="get.php" ><button class="int"> get started ></button></a>
    </div>

    <div class="images">
      <img src="threpisr.jpg" width="300" height="100">
      <p> Free24/7 chat<br> Be heard by volunteer listeners and <br>chat with others who understand and support you</p>
      <a href="signin.php"><button class="int">More ></button></a>
    </div>
</div> -->
   

    <br><br><br><br>
<div class="support" > 
  <h2 style="color: white;">Get support from an online therapist</h2> 
  <p style="color:white;">want a little extra? you can get ongoing support and guidance from a liscensed therapist when you sign up for online theraphy.
   <br><br> <b style="color: white;">our confidential online theraphy & counseling is available for those aged 18+ for $100 per month.</b>
  </p> <br>
<a href="signin.php"><button class="int" style="color:black;">Start Online Theraphy ></button></a> <br><br>
</div>

   <div class="psst"> 
<h1 style="color: white;">We're here for teens too</h1><br>
  <p style="color: white; font-size: 19;" >Are you 13-17 years old?
<br><br>
We have listeners available especially for teens, so you can chat confidentially whenever you need to.
You can also join our lively teen community forums and chat rooms to share with peers who understand 
what you're going through.
 Get support and make new friends along the way.
</p>
</div>  

    <div class="footer">
      <div class="footer_content">
          <div class="footer-about">
            <h1 style='color:white;'>Startup health.</h1>
            <p style='color:black;'>
              Privacy Policy
            </p></br>
            <div class="contact">
              <p style='color:white;'>&nbsp; +234(0)7068542804</p>
              <p style='color:white;'>&nbsp; info@startuphealth.com</p>
            </div>
            <!--<div class="socials" style='color:white;'>
                  <i class="fab fa-twitter"></i>
                </div>
              -->
          </div>
 
          <div class="footer-link">
             <h3 style='color:white;text-align: left;'>Our Quick Links</h3></br>
             <ul>
               <a href="#"><li>online theraphy</li></a>
               <a href="#"><li>considering theraphy at startup health</li></a>
               <a href="#"><li>search for a nearby therapist</li></a>
               <!-- <a href="#"><li>FAQ</li></a>
               <a href="#"><li>Sponsors</li></a> -->
             </ul>
          </div>
 
          <div class="footer-contactform">
             <h3 style="color:white;">Contact Us</h3></br> 
             <form method="post" action="">
               <input type="email"  style="height:20pt;width:250pt;border-radius:5px;" placeholder="Enter Your Email Address..." class="form-contr"></br>
               <textarea cols="46" rows="4" class="form-contr" placeholder="Your Message" style="border-radius:5px;"></textarea></br>
               <button type="submit" class="form-contr">Submit</button>
             </form>  
          </div>
 
      </div>
 
       <!-- <div class="footer_bottom">
         &copy; VINCO.com | Designed by vincoentertainment.
       </div> -->
  
    </div>
</body>
</html>
