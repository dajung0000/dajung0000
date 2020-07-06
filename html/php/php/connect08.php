<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$host = "localhost";
	$user = "djdaily";
	$pw = "djjhjw120109!";
	$dbName = "djdaily";
	$dbconnect = new mysqli($host, $user, $pw, $dbName);
	$dbconnect -> set_charset("utf8");

	if(mysqli_connect_errno()){
		echo "데이터 베이스 접속 실패";
		echo mysqli_connect_errno();
	} else {
		echo "데이터 베이스 접속 성공";
	}
?>
</body>
</html>