<?php
$username=$_POST['username'];
$password=$_POST['password'];
$error="";
$succuss="";

if(isset($_POST['submit']))
{
    if($username=="ach")
    {
        if($password=="akshay")
        {
            $error="";
            $succuss="welcome akshay";
            header("Location:portfolio.html");
        }
        else
        {
            $error="invalid_password";
            $succuss="";
        }
    }
    else
    {
        $error="invalid_username";
        $succuss="";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>


<body>
    <h1  style="background-color:rgb(71, 255, 255);" align="center"><b>LOGIN PAGE</b></h1>
    
    <div  align="center" >
        <p class="error"><?php echo $error; ?></p>
        <p class="succuss"><?php echo $succuss; ?></p>
     <form action="port.php" method="post" >
        <p><br><br><br><br><br><br>
        <label><b>USER NAME:</b>
        <input type="text" name="username" size="20" maxlength="20" placeholder="ENTER_USER_NAME"/>
        </label>
        </p>
        
        <p>
        <label><b>PASSWORD:</b>
        <input type="text" name="password" size="20" maxlength="20" placeholder="ENTER_UR_PASSWORD"/>
        </label>
        </p>
        
        <p><input type="SUBMIT" name="submit"/> <input type="reset" name="clear"/></p><br><br><br><br><br><br>
        <!-- <p><a href="registration.html" target="_blank">  REGISTRATION</a><br><a href="forget.html" target="_blank">FORGET PASSWORD</a><br><a href="home.html" target="_blank">HOME</a></p> -->
        <h1  style="background-color:rgb(71, 255, 255);" align="right"><b><em>@gitam_university</em></b></h1>
     </form>    
    </div>
    
</body>
</html>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------- -->





