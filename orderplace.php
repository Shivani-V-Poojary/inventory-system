<?php
   $cname = $_GET['clientname'];
   $num = $_GET['number'];
   $place = $_REQUEST['place'];
   $name = $_REQUEST['pname'];
   $qua = $_REQUEST['pquantity'];
   $price = $_REQUEST['pprice'];
   echo $cname.$num.$place.$name.$qua.$price
   /*$command_exec = escapeshellcmd('python orderplace.py'. ".$cname." .$num. '.$place.' ".$name." .$qua. .$price);
   $str_output = shell_exec($command_exec);
   echo $str_output;*/
?>
