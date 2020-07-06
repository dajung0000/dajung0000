<!DOCTYPE html>
<html lang="ko">
   <head>
      <meta charset="UTF-8">
      <title>회원가입</title>
      <style>
         * {margin: 0; padding: 0;}
         
         #wrap{ width: 600px; margin: 100px auto 0;}
         h1{text-align: center; font-size: 70px;}
         .box{margin: 30px 0; height: 50px; display: flex; justify-content:space-between; }
         label{width: 25%; line-height: 50px; text-align: center; }
         input{padding-left: 10px; height: 100%; width: 75%;}
         #ll{width: 100%; height: 50px; margin-bottom: 100px;}
         span{font-weight: 800;}
         p{margin-top: 30px;}

         select {width: 75%;}
      </style>
   </head>
   <body>
      <div id="wrap">
         <h1>회원가입</h1>
         <form action="insert2.php" method="post" name="singUp">
            <div class="email-box box">
               <label for="userID">아이디</label>
               <input type="input" name="useID" id="useID" placeholder="아이디">
            </div>

            <div class="uname-box box">
               <label for="userName">이름</label>
               <input type="input" name="userName" id="userName" placeholder="이름">
            </div>
            
            <div class="password-box box">
               <label for="userPW">비밀번호</label>
               <input type="password" name="userPW" id="userPW" placeholder="비밀번호 입력">
            </div>
            
            <div class="email-box box">
               <label for="userEmail">이메일</label>
               <input type="email" name="userEmail" id="userEmail" placeholder="이메일">
            </div>
            
            <div class="phone-box box">
               <label for="userBirth">생일</label>
               <input type="input" name="userBirth" id="userBirth" placeholder="생일">
            </div>
            
            <div class="phone-box box">
               <label for="userPhone">휴대폰 번호</label>
               <input type="input" name="userPhone" id="userPhone" placeholder="휴대폰 번호">
            </div>

            <div class="phone-box box">
               <label for="userGender">성별</label>
               <select name="userGender" id="userGender">
                  <option value="m">남성</option>
                  <option value="s">여성</option>
               </select>
            </div>
            
            <input id="hh" type="submit" value="전달">
         </form>
         
      </div>
      
   </body>
</html>