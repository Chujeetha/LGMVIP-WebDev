<?php
   $con=mysqli_connect("localhost", "root","","result");
   $registerno=$_POST['registerno'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   
   if($registerno=="" || $name=="" || $email=="" || $subject=="" || $message=="")
   {
       echo '<script>alert("Empty fields not allowed !!")</script>';
       header("refresh:0; url=contact.php");
       exit();  
   }
     if(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)){
       echo '<script>alert("Invalid Email !!")</script>';
       header("refresh:0; url=contact.php");
         exit();   
   }
   else{
       $sql = "INSERT INTO contact (Register_Number,Name,Email,Subject,Message) 
               VALUES ('$registerno', '$name', '$email', '$subject','$message')";

       $rs = mysqli_query($con,$sql);
       if($rs)
       {
        header("Location: contact.php?error=Message sent !!");
        exit();
       }
       else
       {
        header("Location: contact.php?error=Error 404 !!");
        exit();
       }
   }

?>