<?php

$db_name = 'mysql:host=localhost;dbname=shop_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);
$result = mysql_query($connect,$sql);
$resultcheck = mysql_num_rows($result)

?>