<?php
session_start();

?>
<?php

include("db_conection.php");



if(isset($_POST['user_login']))
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
	

    $check_user="select * from users WHERE user_email='$user_email' AND user_password='$user_password'";

 
    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
	 echo "<script>alert('Başarıyla giriş yaptınız!')</script>";
       
 echo "<script>window.open('Customers/index.php','_self')</script>";
       
$_SESSION['user_email']=$user_email;



    }
    else
    {
        echo "<script>alert('E-posta veya şifre yanlış!')</script>";
		  echo "<script>window.open('index.php','_self')</script>";
		
		 exit();
		
    }
}
?>