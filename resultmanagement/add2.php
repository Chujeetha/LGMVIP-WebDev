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

   if($rollno1=="" || $name1=="" || $mark11=="" ||  $mark21=="" ||  $mark31=="" ||  $mark41=="" || $total=="")
   {
         header("Location:add.php?error=Empty fields not allowed!!");
         exit();  
   }

    if($email_count!=0)
    {
         header("Location:add.php?error=You have already appointed!!");
         exit();  
    } 

 else
 {
   $sql = "INSERT INTO display(Register_Number,Name,English, Physics,Maths,Chemistry,Total) 
           VALUES ('$rollno1', '$name1', '$mark11', '$mark21', '$mark31','$mark41', '$total')";
   $rs = mysqli_query($con, $sql);
   if($rs)
   {
         header("Location:add.php?error=Successfully added !!");
         exit();  
   }
   else
   {
             echo "Check your connection !!";
             header("refresh:0; url=http://localhost/resultmanagement/add.php");
   }
}

?>