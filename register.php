<?php
   $command_exec = escapeshellcmd('python /cgi-bin/register.py');
   $str_output = shell_exec($command_exec);
   echo $str_output;
?>
