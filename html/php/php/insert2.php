<?php
	include_once 'connectDB.php';

	// echo "<pre>";
	// var_dump($_POST);

	

	//이름 검증
	if($_POST['userName'] == '' || $_POST['userName'] == null){
		echo "이름을 제대로 적어주세요!!!!";
		exit;
	}

	$userName = $_POST['userName'];
	$userName = trim($userName); //공백제거
	$userName = $dbConnect->real_escape_string($userName); //공백 제거후 따옴표로 인한 문번 요류를 방지


	//아이디 검증
	if($_POST['useID'] == '' || $_POST['useID'] == null){
		echo "아이디를 제대로 적어주세요!!!!";
		exit;
	}

	$useID = $_POST['useID'];
	$useID = strtolower(trim($useID)); //공백제거, 소문자 
	$useID = $dbConnect->real_escape_string($useID);
						
	//비밀번호 검증	
	if($_POST['userPW'] == '' || $_POST['userPW'] == null){
		echo "비밀번호를 제대로 적어주세요!!!!";
		exit;
	}

	$userPW = $_POST['userPW'];
	$userPW = trim($userPW); //공백제거 
	$userPW = $dbConnect->real_escape_string($userPW);


	//이메일 검증
	$emailCheck = filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL);
	if($emailCheck == false){
		echo "이메일을 사용할 수 없습니다.";
		exit;
	}

	$userEmail = $_POST['userEmail'];


	//성별 검증
	if($_POST['userGender'] == 'w' || $_POST['userGender'] == 'm'){
		$userGender = $_POST['userGender'];
	} else {
		echo "성별을 선택해주세요!!!";
		exit;
	}

	//생일 검증
	if($_POST['userBirth'] == '' || $_POST['userBirth'] == null){
		echo "생일을 제대로 적어주세요!!!!";
		exit;
	}

	$userBirth = $_POST['userBirth'];
	$userBirth = trim($userBirth);
	$userBirth = $dbConnect->real_escape_string($userBirth);


	//번호 검증
	if($_POST['userPhone'] == '' || $_POST['userPhone'] == null){
		echo "번호를 제대로 적어주세요!!!!";
		exit;
	}
	$userPhone = $_POST['userPhone'];
	$userPhone = trim($userPhone);
	$userPhone = $dbConnect->real_escape_string($userPhone);


	//쿼리문 작성 
	$sql = "INSERT INTO myMember(useID, uname, upassword, email, birthDay, phone, gender, regTime) VALUES('{$useID}', '{$userName}','{$userPW}','{$userEmail}','{$userBirth}','{$userPhone}','{$userGender}', now() )";
	
	//쿼리문 전송
	$result = $dbConnect->query($sql);

	if($result){
		echo "YES";
	} else {
		echo "NO!!!!!!!";
	}
	
?>