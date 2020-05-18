<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>
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
$sql='INSERT INTO user(username,pass)VALUES(?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$username;
$data[]=$pass;
$stmt->execute($data);
$dbh =null;


?>
<a href="login.php">トップへ</a>

</body>