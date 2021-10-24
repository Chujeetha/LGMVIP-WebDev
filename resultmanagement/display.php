<?php

echo <<<_END

<html>
<head> <link rel="stylesheet" href="table.css"> </head>
<body>
<br>

<h1 align="center"><b>DISPLAY STUDENT RECORD<b></h1>

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


$sql = "SELECT * from display";
$records = mysqli_query($conn, $sql);
?>
<br><br>
<table border="2">
  <tr>
    <th>Register Number</th>
    <th>Name</th>
    <th>English</th>
    <th>Physics</th>
    <th>Maths</th>
    <th>Chemistry</th>
    <th>Total</th>
  </tr>



<?php

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Register_Number']; ?></td>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo  $data['English'];?></td>
    <td><?php echo  $data['Physics'];?></td>
    <td><?php echo  $data['Maths'];?></td>
    <td><?php echo  $data['Chemistry'];?></td>
    <td><?php echo  $data['Total'];?></td>
  </tr>	

<?php
}
?>
</table>

<?php mysqli_close($conn);?>

</body>
</html>
