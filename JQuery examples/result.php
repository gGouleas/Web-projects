<?php
if( $_REQUEST["name"] &&  $_REQUEST["phone"] )
{
   $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
   echo "name: ". $name."<br>"."phone:".$phone;
}

?>