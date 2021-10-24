<!DOCTYPE html>
<html>
  <head>
     <title>Admin Login Form</title>
     <link rel="stylesheet" type="text/css" href="admin.css">
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
     <centre><h2>Admin Login</h2></centre><br>   
     <div class="login">
       <form id="login" method="POST" action="http://localhost/resultmanagement/admin2.php" >
 
         <?php if(isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>

  
         <label><b>Admin Id</b></label><br><br>
         <input type="text" placeholder="Admin_Id" name="adminid" id="rollno">
         <br><br>
         <label><b>Password</b></label><br><br>
         <input type="Password" placeholder="Password" name="password" id="password">
         <br><br>
         <b><input type="submit" name="log" id="log" value="Login"></b>   
         <br><br> 
         
       </form>
    </div>
  </body>
</html>