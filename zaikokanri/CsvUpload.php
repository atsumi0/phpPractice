<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>在庫マスタ</title>

  <!-- Common -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="lib/plugins/font-awesome5.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lib/css/AdminLTE.min.css">
  <link rel="stylesheet" href="lib/css/skins/skin-blue.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- /.Common -->

  <link rel="stylesheet" href="css/custom.min.css">
</head>
<body class="hold-transition login-page">
<?php
$tempfile = $_FILES['csvfile']['tmp_name'];
$filename = './CSV/'.$_FILES['csvfile']['name'];

if (is_uploaded_file($tempfile)) {
    if (move_uploaded_file($tempfile , $filename)) {
	echo $filename . "をアップロードしました。";
    } else {
        echo "ファイルをアップロードできません。";
    }
} else {
    echo "ファイルが選択されていません。";
}
?>
</body>
</html>