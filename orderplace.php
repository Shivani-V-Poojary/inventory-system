<?php
   $cname = $_REQUEST['clientname'];
   $num = $_REQUEST['number'];
   $place = $_REQUEST['place'];
   $name = $_REQUEST['pname'];
   $qua = $_REQUEST['pquantity'];
   $price = $_REQUEST['pprice'];

   $command_exec = escapeshellcmd('python orderplace.py'. ".$cname." .$num. ".$place." ".$name." .$qua. .$price);;
   $str_output = shell_exec($command_exec);
   echo $str_output;
?>
