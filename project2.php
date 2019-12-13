<!DOCTYPE html>
<html lang="en">
<head>
    <body style="background-color: #33ffff">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
       body{ font: 20px sans-serif; text-align: center; }
    </style>
</head>
</body>
    <div class="page-header">
        <h1>Hello User,  <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> Take the Survey now </h1>
    </div>
    
        <div class="container">  
            <br />  
            <br />
   <br />
<script type="text/javascript">
   function fun(x) {
      
       window.location="config.php?lang='"+x+"'";
       // body...
   }

</script>


<h2>Which programming language is  best to learn in 2019 according to you ?</h2><br>

<br>
<!--list of radio buttons up on whose selection the page is redirected to 'config.php' which enters the value selected into database and returns back to 'lang.php' page with the percentage of users selected the same option -->
<input type="radio" name="lang" id="lang" value="python" onclick="fun(' python')" > PYTHON <br>
<br>
<input type="radio" name="lang" id="lang" value="php" onclick="fun(' php')">PHP<br>
<br>
<input type="radio" name="lang" id="lang" value="java" onclick="fun(' java')">JAVA<br>
<br>
<input type="radio" name="lang" id="lang" value="cpp" onclick="fun(' cpp')">C++<br>
<br>
<input type="radio" name="lang" id="lang" value="c" onclick="fun(' c')">C<br>
<br>
<br>

<?php
//if the 'res' value is set that is in case if this page is redirected from 'config.php' then the percentage of //people opted the same option is printed
if (isset($_REQUEST['res'])) {
   print_r("Percentage of users picked the same answer is  ".(int)$_REQUEST['res']);
   # code...
}
?>