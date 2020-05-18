<?php
$username = $_POST['name'];
$pass = $_POST['pass'];

$username = htmlspecialchars ( $username );
$pass = htmlspecialchars ( $pass );

$dsn='mysql:dbname=stockmanagement;host=localhost';
$user='root';
$password='';

$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
$sql='SELECT FROM user WHERE username = ? pass = ?';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$dbh =null;

return $username;

?>