<?php
	include_once 'connectDB.php';

	$useID = "djdaily";
	$uname = "정다정";
	$upassword = "djjhjw120109!";
	$email = "dajung0000@naver.com";
	$birthDay = "2001-12-02";
	$phone = "01022074582";
	$gender = "w";

	//쿼리문 작성 
   $sql = "INSERT INTO myMember(useID, uname, upassword, email, birthDay, phone, gender, regTime) VALUES('{$useID}','{$uname}','{$upassword}','{$email}','{$birthDay}','{$phone}','{$gender}', now() )";

   //퀴리문 전송 
   $result = $dbConnect->query($sql);
   
   if($result){
      echo "yes";
   } else {
      echo "No!!!!!!!!!!!!!!!!!!!!!!!!!!!";
   }
?>  