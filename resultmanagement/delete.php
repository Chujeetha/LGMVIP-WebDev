<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

   $reg=$_POST['user'];
   $name=$_POST['pass'];

   $sqlr="select Name from display where Name='$name'";
   $rsss = mysqli_query($conn,$sqlr);
   $reg_count=mysqli_num_rows($rsss);
   
   if($reg=="" || $name=="")
   {
       header("Location:delete2.php?error=Empty Fields not allowed !!");
       exit();
   }

    if($reg_count==0)
    {
         header("Location:delete2.php?error=This user doesn't exist !!");
         exit();  
    }  

    $sql = "DELETE FROM display WHERE Register_Number='$reg'";
    if ($conn->query($sql) === TRUE) {
                header("Location: delete2.php?error=Successfully removed!!");   
                exit();  
    } else {
      header("refresh:0; url=delete2.php");
    }

    $conn->close();
    ?>
