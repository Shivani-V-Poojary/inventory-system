<?php
   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $phone = $_REQUEST['phone'];
   echo "<h1>".$name.$email.$phone."</h1>";
   $command = escapeshellcmd('python register.py'.' '.$name.' '.$email.' '.$phone);
   $str_output = shell_exec($command);
   echo $str_output;
?>
