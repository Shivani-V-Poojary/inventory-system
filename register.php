<?php
   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $phone = $_REQUEST['phone'];
   echo "<h1>".$name.$email.$phone."</h1>"; 
   $command = system("python register.py $name $email $phone > /dev/null 2>&1 &");
   $str_output = shell_exec($command);
   echo $str_output;
?>
