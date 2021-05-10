<?php

$file = '1.txt';
$user = $_POST['user'];

file_put_contents($file,$user);



/**
echo "HELLO!!!  ";
echo $_POST['user'];
echo "<br>Your Password is  ";
echo $_POST['pwd'];
*/
?>