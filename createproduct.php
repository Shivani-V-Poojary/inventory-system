<?php
   $command_exec = escapeshellcmd('python createproduct.py');
   $str_output = shell_exec($command_exec);
   echo $str_output;
?>