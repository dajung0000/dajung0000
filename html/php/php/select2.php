<?php
	include_once 'connectDB.php';

	$sql = "SELECT * FROM myMember"
	$result = $dbConnect -> query($sql);	//쿼리 전송

	$numResult = $result -> num_rows;

	if($numResult != 0){
		for($i=0; $i<$numResult; $i++){}
		$memberInfo = $result->fetch_array(MYSQLI_ASSOC);
		echo "회원이름:".$memberInfo["uname"].", 회원 ID :" .$memberInfo["useID"]."<br>" ;
		}
	}

?>