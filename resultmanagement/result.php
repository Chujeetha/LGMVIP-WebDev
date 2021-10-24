<!DOCTYPE html>
<html>
  <head>
     <title>Result Page</title>
     <link rel="stylesheet" type="text/css" href="result.css">
  </head> 
  <body>
     <nav>
            <ul>
              <li><a href="home.html">HOME</a></li>
              <li><a href="admin.php">ADMIN</a></li>
              <li><a href="about.html">ABOUT</a></li>
              <li><a href="contact.php">CONTACT</a></li>
            </ul>
         </nav> 
     <centre><h2>Result Form</h2></centre><br>   
     <div class="login">
       <form id="login" method="POST" action="http://localhost/resultmanagement/result1.php" >
 
         <?php if(isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>

  
         <label><b>Register Number</b></label><br><br>
         <input type="text" placeholder="Register_No" name="rollno" id="rollno">
         <br><br>
         <label><b>Name</b></label><br><br>
         <input type="text" placeholder="Name: John" name="name" id="password">
         <br><br>
         <b><input type="submit" name="log" id="log" value="Login"></b>   
         <br><br> 
         
       </form>
    </div>
  </body>
</html>