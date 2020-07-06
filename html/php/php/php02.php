<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP02</title>
	<style>
		.clock {background: #bedfd4; color: #000;}
	</style>
</head>
<body>
	<div class="clock"></div>

	<script>
		let today = new Date();	//날짜 객체 
		let nowMonth = today.getMonth();
		let nowDate = today.getDate();
		let nowFullYear = today.getFullYear();

		document.write(today, "<br>"); 
		document.write(nowMonth, "<br>"); 
		document.write(nowDate, "<br>"); 
		document.write(nowFullYear, "<br>");

		let clock = document.querySelector(".clock")

		setInterval(function(){
			clock.innerHTML = new Date().toLocaleString() 
		},1000);

	</script>

	<?php
		ini_set("date.timezone", "Asia/Seoul");
		echo "<br>";
		echo "1970년 1월 1일 0시 0분 0초로부터 ".time()."초가 지났습니다. ";
		echo "<br>";
		echo "현재 시간은 " .date("Y년 m월 d일 H시 i분 s초", time());
	?>
</body>
</html>