
<?php

$dsn='mysql:dbname=stockmanagement;host=localhost';
$user='root';
$password='';

$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
$sql='SELECT user.user_id,user.username FROM user';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$dbh =null;

$csv='ユーザーID,ユーザー名';
$csv.="\n";
while(true)
{
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	$csv.=$rec['user_id'];
	$csv.=',';
	$csv.=$rec['username'];
	$csv.="\n";
}

//print nl2br($csv);

$file=fopen('./CSV/user.csv','w');
$csv = mb_convert_encoding($csv,'SJIS','UTF-8');
fputs($file,$csv);
fclose($file);

// CSVで出力
header('Content-Type:force-download');

//ファイルサイズを取得
//header('Content-Length: '.filesize($csv));
//ローカルにこの名前で保存
header('Content-Disposition: attachment; filename="userList.csv"');
readfile('./CSV/user.csv');
exit;

//合算SQL
//ヘッダーチェック
//NULLチェック


?>
