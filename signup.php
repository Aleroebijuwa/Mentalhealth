<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="style.css" >

    <style> 
    body{
            background:url(IMG_9433.JPG) ,linear-gradient(gray,gray); 
            background-blend-mode: multiply;
            background-repeat: no-repeat;
            background-size:cover;
            background-position:center; 
           
        }  
        
       
        
        .fa{
            cursor:pointer;
            color:#999;
        } 
        .fa.active{
              color:dodgerblue;
        }
        /* .input-box input{
            margin: 10px;
            padding: 5px;
            color: white;
        } */ 
        .input-box{
            background-color: rgb(52, 73, 94,0.7) ;
            width: 550px;
            height: 620px;
            margin: 0 auto;
            margin-top: 20px; 
            /* background-color: rgb(6,20,150,0.2);  */
        }  
        input{
            margin-top: 10px; 
            height: 40px; 
            width: 300px;
        }  
       button{
            border-radius: 10;
            background:white;
            color: black;
            padding: 5px;
            font-size: 15;
        }
        #eie,#eye{
            border-radius: 5;
            background: white;
            color: black;
        }
        select{
            margin: 5px;
            padding: 5px;
            color: black;
        }
        header{
        height:80px;
        width:100%;
        position:fixed; 
        text-align: justify; 
        letter-spacing: 0.5;  
        background:rgb(52, 73, 94,0.7); 
} 
        
    </style>
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
             
              <a href="signin.php" style="color:white;"><button class="int">SIGN IN</button></a>
              <a href="signup.php" style="color:white;"><button class="int">SIGN UP</button></a> 
              <a href="about.php" style="color:white;"><button class="int">ABOUT US</button></a>
            </nav> 
          
      
        </b>
      </div>
       </header> 
        </div><br><br><br><br><br><br>
   <!-- <div class="con">-->
      
    <div class="form">
            <div class="input-box"> 
            <form action="signuphandler.php" method="POST"> 
            <center><h1 style="color:white;">SIGN UP HERE TO TALK TO A LISTENER</h1></center>
                <center><input type="text" placeholder="Name" name="name"><br><br></center>
                <center> <input type="date" placeholder="Date of birth" name="date"><br><br></center>
                <center>
                <select name="Gender"> 
                <option >--Gender--</option> 
                <option value="Male">Male</option> 
                <option value="Female">Female</option>
                </select><br> 
                <center><input type="text" placeholder="username" name="username"><br><br></center>
                <center><input type="text" placeholder="Email Address" name="email"><br><br></center>
                <center> <input type="password"  placeholder="Enter Password" name="password" id="pwd"><br><br>    </center>
                <center>   <input type="text" placeholder="confirm password" name="conpassword" id="pw" >         <br><br></center>
                <center><input type="submit" value="SIGN UP" name="submit"></center> 
                </form>
                <center><p style="color: white;font-size: 20;"> Interested in becoming a listener?
                <br><a href="listener.php" style="color: red;"> Learn More/signup</a></p></center>
            </div>
        

    </div> 
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
</script> -->


</body>
</html>