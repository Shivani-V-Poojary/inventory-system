<?php
if ( isset( $_POST['submit'] ) ) {

   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $phone = $_REQUEST['phone'];
   system("python register.py $name $email $phone > /dev/null 2>&1 &");
   $command_exec = escapeshellcmd('python register.py');
   $str_output = shell_exec($command_exec);
   echo $str_output;
?>
