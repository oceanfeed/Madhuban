<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Molengo&family=Tangerine:wght@700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
    <style>
        body{
            background-image: url('bg_3.jpg');
            color: white;
            background-size :100%;
        }
        h1{
          
            text-align: center;
            font-family: 'Tangerine', cursive;
           /* font-family: 'Caveat', cursive;*/
        }
        .form{
        	background: #170000d1;
            border-radius: 39px;
            box-shadow: 0px 0px 31px #674e4e;
            width: 400px;
            padding: 40px;
            margin: auto;
            display: flex;
            text-align: center;
            margin-top: 85px;
            
        } 
        form{
        	margin: auto;
        }
        label{

        }
        .form input{
            background: transparent;
            border: none;
            border-bottom: 1px solid white;
            border-radius: 8px;
            margin: 10px;
            padding: 5px;
            color: white;
            font-family: fontawesome;
            text-align: center;	
           width: 225px;
        }
        .form p{
            text-align: center;
            padding-top: 20px;
        }
        .form a{
            color:white;
            text-decoration: none;
           
           
        }
        .form a:hover{
            color: lightgreen;
            text-decoration: none;
        
        }
        .form button{
            color: black;
            padding: 8px 30px;
            border-radius: 20px;
            border: none;
            background: white;
            border: 1px solid rgb(26, 212, 212);
           margin:10px 90px 10px;
           width: 100px;
           
        } .form button:hover{
                background-color: teal;
        }
        @media screen and (max-width: 600px){
            .form{
            border: 2px double grey;
            width: 95%;
            padding: 40px;
            margin: 10px;
            box-sizing: border-box;
        }   
        body{
            background-image: url('bg_3.jpg');
            color: white;
            background-size: 500%;
            background-repeat: no-repeat;
        }
        h1{
            padding-top: 30%;
        }
        }
    </style>
</head>
<body>
    

   <div class="form">
      
       <form action="validation.php" method="post">
       	<h1>Log In</h1><br><br>
           <!-- <label for="user"><b>User-Mail :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><br> -->
           <input type="email" name="email" placeholder="&#xf007;  Email Id"><br><br>
           <!-- <label for="password"><b>Password :</b></label><br> -->
           <input type="password" name="password" placeholder="&#xf13e;  Password"><br><br>
           <button value="submit"> Log In</button>
          <p><a href="signup.php">New User.? Sign Up</a></p> 
         <p><a href="adminlogin.php">Sign In as a Admin <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></p>
           <p><a href="recovery.html">Forget your password don't worry.? click here</a></p> 
          
       </form>
   </div>
</body>
</html>