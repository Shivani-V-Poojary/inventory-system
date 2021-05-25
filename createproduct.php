<?php
   $pid = $_REQUEST['image'];
   $pname = $_REQUEST['name'];
   $quan = $_REQUEST['quantity'];
   $price = $_REQUEST['price'];
   $command_exec = escapeshellcmd('python createproduct.py'.' '.$name.' '.$pid.' '.$quan.' '.$price);
   $str_output = shell_exec($command_exec);
   echo $str_output;
?>
