<?php
   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $phone = $_REQUEST['phone'];
   echo "<h1><center> Login successful </center></h1>"; 
   $str_output = shell_exec('python register.py . $name $email $phone');
   echo $str_output;
?>
