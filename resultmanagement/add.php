<html>
<head>
	<title>Add Student</title>
	<link rel="stylesheet" type="text/css" href="add.css">
</head>
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

	<centre><h3>Add Student Marks</h3></centre>
	<div class="appoint">
	<form id="appoint" method ="post" action = "http://localhost/resultmanagement/add2.php" >
	 <?php if(isset($_GET['error'])) { ?>
	  <p class="error"><?php echo $_GET['error']; ?></p>
	  <?php } ?>
	<label><b>Register Number</b></label><br><br>
	<input type="text" placeholder="Register Number" name="rollno" id="username">
	<br><br>

	<label><b>Name</b></label><br><br>
	<input type="text" placeholder="Name: John" name="name" id="fname">
	<br><br>

	<label><b>English</b></label><br><br>
	<input type="text" placeholder="Mark1" name="mark1" id="lname">
	<br><br>

	<label><b>Physics</b></label><br><br>
	<input type="tel" placeholder="Mark2" name="mark2" id="cellno" >
	<br><br>

	<label><b>Maths</b></label><br><br>
	<input type="text" placeholder="Mark3" name="mark3" id="email" >
	<br><br>

	<label><b>Chemistry</b></label><br><br>
	<input type="text" placeholder="Mark4"  name="mark4" id="password">
	<br><br>

	<label><b>Total</b></label><br><br>
	<input type="text" placeholder="Total" name="total" id="confirmpassword">
	<br><br>

	<b><input type="submit" name="apt" id="apt" value="Submit">
	</form>

</html>