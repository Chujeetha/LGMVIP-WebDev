<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="contact.css">
    <title>Contact Us</title>
</head>
<body>
 
         <nav>
            <ul>
              <li><a href="home.html">HOME</a></li>
              <li><a href="admin.php">ADMIN</a></li>
              <li><a href="about.html">ABOUT</a></li>
            </ul>
         </nav> 
    
     <div class="login">
    <h2>Contact Us</h2>
    <form  method="post" action="http://localhost/resultmanagement/cont.php">
<?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
   
<div>
  
  <div class="first"> 
    <label for="name">Register Number</label><br>
    <input type="text" id="hostelname" placeholder="Register Number" name="registerno" style="font-size:12pt;height:40px;width:350px;"><br><br>
    <label for="name">Name</label><br>
    <input type="text" id="name" placeholder="Name - ex:John" name="name" style="font-size:12pt;height:40px;width:350px;"><br><br>
    <label for="name">Email</label><br>
    <input type="text" id="registerno" placeholder="Email" name="email" style="font-size:12pt;height:40px;width:350px;"><br><br>
   <label for="name">Subject</label><br>
    <input type="text" id="hostelname" placeholder="Subject" name="subject" style="font-size:12pt;height:40px;width:350px;"><br><br>

  </div>
  <div class="second">
    <label for="name">Message</label><br>
    <textarea id="subject" placeholder="Message" name="message" style="font-size:12pt; width:350px; height:150px;"></textarea><br><br>
    <button id="log" type="submit" value="contactus">Contact Us</button>    
  </div>

</div>

    </form>
  </div>
</body>
</html>
