<html>
<head> <link rel="stylesheet" href="delete.css"> </head>
<body>
<div class="val" align="right">
      <nav>
        <ul>
           <li><a href="home.html">HOME</a></li>
           <li><a href="admin.php">ADMIN</a></li>
           <li><a href="about.html">ABOUT</a></li>
           <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </nav> 
  </div>
   <h2>Delete Student Record</h2>
    
    <form method="post" class="login" action="delete.php">
<?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
        <div>
            <label> Register Number </label><br><br>
            <input id="Uname" type="text" placeholder="Register Number" name="user"> 
        </div><br>

        <div>
            <label> Name</label><br><br>
            <input id="pass" type="text" placeholder="Name: John" name="pass"/>
        </div><br><br>
        <div>
        <button id="log" type="submit" value="remove">Delete</button>
        </div>
    </form>
</div>
</body>
</html>
