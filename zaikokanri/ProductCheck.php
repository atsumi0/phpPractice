<?php
$name = $_POST['name'];

$name = htmlspecialchars ( $name );

$dsn='mysql:dbname=stockmanagement;host=localhost';
$user='root';
$password='';

$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
$sql='INSERT INTO product(name)VALUES(?)';
$stmt=$dbh->prepare($sql);
$data[]=$name;
$stmt->execute($data);
$dbh =null;

print $name.'を登録しました';
?>