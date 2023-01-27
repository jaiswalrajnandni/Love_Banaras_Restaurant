<?php

   $cnn = mysqli_connect("localhost","root","","love_banaras_restaurant");

   $name = $_POST['txtname'];
   $email = $_POST['txtemail'];
   $phone = $_POST['txtphone'];
   $date  = $_POST['txtdate'];
   $time = $_POST['txttime'];
   $message = $_POST['txtmessage'];

   $sql = "INSERT into member(name,email,phone,date,time,message) VALUES('$name','$email','$phone','$date','$time','$message')";

   if(mysqli_query($cnn,$sql))
   {
   	 echo "<script>alert('Thankyou for Booking');</script>";
   	 echo "<script>location.href='index.php'</script>";  
   }


?>
