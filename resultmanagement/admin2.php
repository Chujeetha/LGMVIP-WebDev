<?php

  $admin = $_POST['adminid'];
  $pass = $_POST['password'];
  if($admin =="" || $pass=="")
  {
       header("Location: admin.php?error=Empty Fields not allowed");
        exit();
  }
  else
  {

       $con=mysqli_connect("localhost","root","","result");

       if(isset($_POST['adminid'])){
       $admin =$_POST['adminid'];
       $pass = $_POST['password'];
    
       $sql = "select * from signup where Admin_id='". $admin."'AND Password='".$pass."'limit 1";

       $res = mysqli_query($con,$sql);
       if(mysqli_num_rows($res)==1){
       header("refresh:0; url=http://localhost/resultmanagement/staff.html");
        }
       else{
       header("Location: admin.php?error=Invalid Register No/Password !!");
        exit();
       }
     
      }
   }

?>

