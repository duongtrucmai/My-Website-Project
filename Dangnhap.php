<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$date = date_create($_POST["birth"]);

$sql = "INSERT INTO customers (fullname,phone, email, birthday, password) 
	VALUES ('".$_POST["name"] ."','".$_POST["phone"] ."', '".$_POST["email"] ."', '".$date ->format('Y-m-d') ."','".md5($_POST["password"])."' )";

if ($conn->query($sql) == TRUE) {
  header("DangNhap.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!-- Lập trình Web NHÓM 7:  -->

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <title>Login | SEVENTEEN</title>
  <link rel="stylesheet" href="css/cssDangNhap.css">
  <link href="image/logo.PNG" rel="shortcut icon" type="image/vnd.microsoft.icon" /> 
</head>
<header style="position: fixed;">
 
  <br><br><br><br>
<body>
 
  
    <div class="main_div">
      <p href = "index.html"><img src = "image\logoChuBlack.PNG" width = "100px" height = "75px" style = "margin-top: -27px;"></p>
     
    

    

      <div class = "title"> Đăng Nhập</div> 
     
      <div class  ="social_icons">
        <a href = "https://www.facebook.com/" style ="margin-left: 5px;
        font-size: 18px; margin-right: 5px;
    background: #4267b2;"><span><!--<i class = "fa fa-facebook"></i>-->Facebook</span></a>
        <a href = "https://twitter.com/" style = "margin-left: 5px;
        font-size: 18px; margin-left: 5px;
    background: #1da1f2;"><span>Twitter</span></a>
      </div>

      <form action="log.php" method="post">
        <div class = "input_box">
          <input type="text" id="email" placeholder="Email or Phone" name="email" required>
         <!--<div class = "icon"><i class= "fa fa-user"></i></div>-->

        </div>


        <div class = "input_box">
          <input type="password" id="password" placeholder="Password" name="password" required>
          <!--<div class = "icon"><i class= "fas fa-lock"></i></div>-->


        </div>


       


     
          <div class = "option_div">
            <div class = "check_box">
              <input type = "checkbox" checked="checked" name="remember" >
              <span>Nhớ mật khẩu</span>
            </div>
            <div class = "forget_div">
              <a href = "#">Quên mật khẩu?</a> <br>
            </div>
            </div>
           
            <div class="clearfix">
              <button onclick="dn()" type="submit" class="signupbtn" 
              style = "font-family: 'Times New Roman';margin-top: 25px;
              height: 100%;
    width: 100%;
    outline: none;
    font-size: 17px;
    padding-left: 25px;
    border-radius: 5px;
    border: 1px solid lightgrey;
    transition: all 0.3s ease; border-color:grey;background: linear-gradient(to top, lightblue, lightpink);">Đăng nhập</button>
            </div>


        
        <div class = "sign_up">Bạn chưa có tài khoản?
          <a href = "DangKy.php">Đăng ký ngay</a><br>
        </div>
        <a href = "index.html" style = "color: red;">Quay về Trang chủ</a>
     

     



      </form>
    </div>
    
  </body>
  <br>
  <br>
  <br>
    











  
  
  <script type="text/javascript">
      function dn() {


        const password = document.getElementById("password").value;

        var email = document.getElementById("email");
        var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (emailReg.test(email.value) == false) {
          alert("Email không hợp lệ!");
          email.focus();
          return false;
        }
        if (password == "" || password.length < 6) {
          alert("Mật khẩu tối thiểu 6 kí tự");
          return;
        }

        confirm("Đăng nhập thành công!");
      
            function Redirect() {
               window.location="SanPham.html";
            }

            
      

      </script>
  </form>

