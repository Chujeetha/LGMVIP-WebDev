<?php
   $con = mysqli_connect("localhost", "root","","result");
   $rollno1=$_POST['rollno'];
   $name1=$_POST['name'];
   $mark11=$_POST['mark1'];
   $mark21=$_POST['mark2'];
   $mark31=$_POST['mark3'];
   $mark41=$_POST['mark4'];
   $total=$_POST['total'];
  
   $sqlr="select Register_Number from display where Register_Number='$rollno1'";
   $rsss = mysqli_query($con,$sqlr);
   $email_count=mysqli_num_rows($rsss);

   
  $rollno1=$_POST['rollno'];
  $name1=$_POST['name'];
  $mark11=$_POST['mark1'];
  $mark21=$_POST['mark2'];
  $mark31=$_POST['mark3'];
  $mark41=$_POST['mark4'];
  $total=$_POST['total'];


   if($rollno1=="" || $name1=="" || $mark11=="" ||  $mark21=="" ||  $mark31=="" ||  $mark41=="" || $total=="")
   {
         header("Location:update.php?error=Empty fields not allowed!!");
         exit();  
   }

 else
 {
   $sql = "UPDATE display SET Register_Number='$rollno1', Name='$name1', English='$mark11', Physics='$mark21', Maths='$mark31', Chemistry='$mark41', Total='$total' WHERE Register_Number='$rollno1'";
   $rs = mysqli_query($con, $sql);
   if($rs)
   {
         header("Location:update.php?error=Successfully updated !!");
         exit();  
   }
   else
   {
             echo "Check your connection !!";
             header("refresh:0; url=http://localhost/resultmanagement/update.php");
   }
}

?>