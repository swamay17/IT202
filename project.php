<?php 
 

$host="sql1.njit.edu";
$User="sm2758";
$Password="";
$db="project1";
 
mysql_connect($host,$User,$Password);
mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $Password=$_POST['Password'];
    
    $sql="select * from project1 where User='".$uname."'AND Password='".$Password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
}
?>   

<!DOCTYPE html>
<html>
         <div>
	
<body>
	
		<form>
		<div class="form-input">
		<input type="text" name="text" placeholder="Enter the User Name"/>	
		</div>
		<div class="form-input">
		<input type="Password" name="Password" placeholder="Password"/>
		</div>
		<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>
