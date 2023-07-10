<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <style> 
     
    
        body{
            background-image: url(IMG_9433.JPG); 
             position: center; 
            background-size:cover;
            background-position:center center; 
        }  
        .input-box{
            background-color: rgb(52, 73, 94,0.7) ;
            width: 500px;
            height: 450px;
            margin: 0 auto;
            margin-top: 160px; 
        } 
        
        .form{
            color: black; 
        } 
        .submit{
            border-radius: 20px;  
            padding: 10;
        } 
        .submit:hover{
           background-color: grey;
        } 
        input{
            margin-top: 20px; 
            height: 45px; 
            width: 300px;
        }  
 
       .syu{
       
       }
        header{
        height:80px;
        width:100%;
        position:fixed; 
        text-align: justify; 
        letter-spacing: 0.5;  
        background:rgb(52, 73, 94,0.7); 
} 
   a{
     margin-top:40px;
     text-decoration:none;
     color:white;
   }     
        
        </style>
    </head> 
   
                        <title>
                            LOGIN FORM
                        </title>
                    
                    <body>  
                    <form method="POST" action="signin_handler.php"> 
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
              <a href="index.php" style="color:white;"><button class="int">HOME</button></a> 
              <button class="int" onclick='script()'>SIGN UP</button>
              <a href="about.php" style="color:white;"><button class="int">ABOUT US</button></a>
            </nav> 
            <!-- <div class="wrap_the_header_bottom">
        &copy; <b>STARTUP. -->
      
        </b>
      </div>
       </header> 
        </div>
        <br><br>
   <!-- <div class="con">-->
      
       

                            <div class="form">  
                                <form method="POST" action="signin_handler.php" >
                                 <div class="input-box">
                                     <!-- <img src="IMG_E5279.JPG" > -->  
        <br><br><center><p style="font-size: 20;color: white;"><b>Want to talk to a listener? signin</b></p></center>
                                     
         <br><br> <center> <input type="text" placeholder="Username" name='username'> <br><br></center>
                        
         <input type="password" placeholder='Password' name='password' id="pwd" ><br><br> 

         <center><input type="submit" value="SIGN IN" name="submit"></center> 
    
<!-- <script>
        function validatePassword(){
            if(pwd.value != pw.value) {
                pw.setCustomValidity("INCORRECT PASSWORD");
            }else{
                pw.setCustomValidity('');
            }
        } 
        pwd.onchange = validatePassword;
        pw.onkeyup = validatePassword;
        function script(){
            window.location.assign('sigup.php');
        }
</script>
        <a href="forgotpass.php" >Forgot password?</a> 
        
                </form> -->
</body>
</html> 
<?php
include_once('connection.php');
 ?> 