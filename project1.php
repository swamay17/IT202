

<?php
   include("config1.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
           
      $myusername = mysqli_real_escape_string($db,$_POST['User']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT id FROM project1  WHERE User = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
     	
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:18px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:600px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#FFA07A; color:#FFFFFF; padding:6px;"><b>Login</b></div>
				
            <div style = "margin:40px">
               
               <form action = "" method = "post">
                  <label>Username :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password : </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:16px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>

