<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>在庫一覧</title>

<!-- Common -->
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">

<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet"
	href="lib/plugins/font-awesome5.0/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="lib/css/AdminLTE.min.css">
<link rel="stylesheet" href="lib/css/skins/skin-blue.min.css">
<!-- Google Font -->
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<!-- /.Common -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<link rel="stylesheet" href="css/custom.min.css">
</head>
<body class="hold-transition login-page">
<?php
$name = $_POST ['name'];
$name = htmlspecialchars ( $name );


$dsn = 'mysql:dbname=stockmanagement;host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO ( $dsn, $user, $password );
$dbh->query ( 'SET NAMES utf8' );
$sql = 'SELECT product.product_id,product.name FROM product WHERE name LIKE \'%'.$name.'%\'';
$stmt = $dbh->prepare ( $sql );
$stmt->execute ();
$dbh = null;
?>
		<div class="row">
		<div class="col">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<td>製品コード</td>
						<td>商品名</td>
					</tr>
				</thead>
				<tbody>
<?php
foreach ( $stmt as $row ) {
	// データベースのフィールド名で出力
	echo '<tr>';
	echo '<td>' . $row ['product_id'] . '</td>';
	echo '<td>' . $row ['name'], '</td>';
	echo '</tr>';
}
//header('Content-type: application/json');
//echo json_encode($stmt,JSON_UNESCAPED_UNICODE);
?>
					</tbody>
			</table>
		</div>
	</div>

</body>
</html>