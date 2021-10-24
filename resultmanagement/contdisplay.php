<?php


echo <<<_END

<html>
<head> <link rel="stylesheet" href="contdisplay.css"> </head>
<body>
<br>

<h1 align="center"><b>MESSAGE BY THE STUDENT<b></h1>

</body>
</html>

_END;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * from contact";
$records = mysqli_query($conn, $sql);
?>
<br><br>
<table border="2">
  <tr>
    <th>Register Number</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>



<?php

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Register_Number']; ?></td>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo  $data['Email'];?></td>
    <td><?php echo  $data['Subject'];?></td>
    <td><?php echo  $data['Message'];?></td>
  </tr>	

<?php
}
?>
</table>

<?php mysqli_close($conn);?>

</body>
</html>
