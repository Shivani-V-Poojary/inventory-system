<?php
if ( isset( $_POST['reg_user'] ) ) {

   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $phone = $_REQUEST['phone'];
   system("python register.py $name $email $phone > /dev/null 2>&1 &");
}
?>
