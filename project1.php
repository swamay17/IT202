<?php
include "config1.php";

if(isset($_POST['but_submit'])){

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            echo "Password matched";
            header("location: project2.php");
        }else{
            echo "Invalid username and password";
        }

    }

}
?>


<html> 
<head> 
</head> 
<body id="body-color">  
<fieldset style="width:50%"><legend>Login</legend> 
<form method="post" action="">
        <div id="div_login">
            <div>
                <input type="text" class="textbox" id="username" name="username" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="username" name="password" placeholder="Password"/>
            </div>
            <div>
               <input type="submit" value="Submit" name="but_submit" id="but_submit" />
           </div>
         <div class="input-group">
  	         
              
             <input type="button" onclick="location.href='registration.php';" value="Register" />
              
          
                     
  	</div>
        </div>
    </form> 
</fieldset> 
</div> 
</body> 
</html>
