<?php

 $connection = mysqli_connect('localhost','ssset20d_kurs','qwerty','ssset20d_kurs');
 
 if ($connection == false)
 
 {
     echo('eroor');
     echo mysqli_connect_error();
     exit();
     
 
 }
 
 $key = "6Lck2hsUAAAAAJir1ma8Bt7y_8qkEHd6UxT9nnKM";
 $secretkey = "6Lck2hsUAAAAAFss7iX9VbAGTlhnpz0RbpghW-5j";
 session_start();
?>