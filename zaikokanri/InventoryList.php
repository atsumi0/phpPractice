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
<!-- Ajax -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <script type="text/javascript" src="./js/ajax.js"></script>

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

	<div class="container">
		<div class="card border-dark mb-3">
			<div class="card-header">
				<p>在庫一覧</p>
			</div>

			<div class="row">
				<div class="col">
					<div class="card-body">

						<div class="form-group has-feedback">
							<input type="text" name="name" id="name" class="form-control"
								placeholder="商品名" required> <span
								class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<button type="submit" class="btn btn-primary btn-sm" id="ajax">検索</button>
						</div>

					</div>
				</div>
			</div>

		</div>
		<!-- Ajax表示 -->
		<div id="result"></div>

	</div>

</body>
</html>