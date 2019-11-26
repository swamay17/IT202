 
<!--index.php--!>
<html>  
      
    <body>  
        <div class="container">  
            <br />  
            <br />
   <br />
  
   <div class="row">
    <div class="col-md-6">
     <form method="post" id="poll_form">
      <h3>Which programming language  you like the most ?</h3>
      <br />
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="Laravel" /> JAVA</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="CodeIgniter" /> PYTHON</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="CakePHP" /> PHP</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="Symfony" /> C++</h4></label>
      </div>
      <div class="radio">
       <label><h4><input type="radio" name="poll_option" class="poll_option" value="Phalcon" /> C </h4></label>
      </div>
      <br />
      <input type="submit" name="poll_button" id="poll_button" class="btn btn-primary" />
     </form>
     <br />
    </div>
    <div class="col-md-6">
     <br />
     <br />
     <br />
     <h4>Live  Result</h4><br />
     <div id="poll_result"></div>
    </div>
   </div>
   
   
   <br />
   <br />
   <br />
  </div>
    </body>  
</html>

