<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
  include("PHP/header.php");    
?>

  </head>
  <body>
 <?php
  include("PHP/menu.php");    
?>
      
  <body>
   
    <?php
  include("PHP/MonMenuHaut.php");    
?>
    
    <div id="Content" class="p-4">
      <form>
        <div class="form-group">
         <label for="exampleInputPrenom">First Name </label>
          <input type="First Name" class="form-control" id="exampleInputFirstName" aria-describedby="" placeholder="Insert here your first name">    </div>
            <div class="form-group">
         <label for="exampleInputNom">Last name </label>
          <input type="Last name" class="form-control" id="exampleInputLastName" aria-describedby="" placeholder="Insert here your last name">    </div>
           <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
         <div class="form-group">
          <label for="Subject">Subject</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tell us the subject of your message">
          </div>
           <div class="form-group">
          <label for="Message">Message</label>
          <textarea id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tell us the subject of your message">
          </div>
   
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
<?php
  include("PHP/footer.php");    
?>
   
  </body>
</html>
