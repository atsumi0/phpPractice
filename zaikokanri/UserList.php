<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
<?php

//DB接続
$dsn = 'mysql:dbname=stockmanagement;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO ( $dsn, $user, $password );
$dbh->query ( 'SET NAMES utf8' );
$sql = 'SELECT username FROM user';
$stmt = $dbh->prepare ( $sql );
$stmt->execute ();
$dbh = null;

print 'ユーザー一覧<br>';
while(true)
{

	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print $rec['username'];
	print'<br>';
}

?>
<script>
window.alert("Hello");
</script>

</body>