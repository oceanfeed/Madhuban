



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body{
              background-image: linear-gradient(to left, rgb(250, 242, 242),rgb(39, 143, 212));
            margin: 5%;
        }
        form{
            width: 50%;
            margin-left: 20%;
            border: 2px double black;
            text-align: center;
            padding: 30px;
           
        }input{
            text-align: center;
            font-family: fontawesome;
            font-size: 1em;
            padding: 4px;
        }
        
        h1{
            margin-top:30px;
            text-align:center;
        }
        @media screen and (max-width:600px){
            form{
                box-sizing: border-box;
            width: 90%;
            margin-left:20px;
            margin-right: 20px;
            border: 2px double black;
            text-align: center;
            padding: 30px;
           
        }h1{
            margin-top:140px;
            text-align:center;
        }
        }
        button{
            padding: 8px;
            font-size: 1.2em;
        }
    </style>
</head>
<body><h1> Cancel your order </h1>
    <form action="cancelation.php" method="POST">
        <label for="email"><h3>Enter your Email : </h3></label>
        <input type="email" name="email"  placeholder="&#xf0e0; &nbsp;  email"><br><br><br>
        <label for="mob"><h3>Enter Mobile No : </h3></label>
        <input type="text" name="mob"  placeholder="&#xf095; &nbsp;  contact"><br><br><br>
        <label for="query"><h3> Your Query :</h3></label>
        <textarea name="query" id="" cols="30" rows="10" placeholder="Write here....."></textarea><br><br>
        <button name="submit"><b>Submit</b></button>
    </form>
    <?php
include "cancelation.php";
?>

</body>
</html>