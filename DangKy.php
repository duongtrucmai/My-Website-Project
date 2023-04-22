<!-- Lập trình Web NHÓM 7:  -->

<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="UTF-8">
  <title>Sign Up | SEVENTEEN</title>
  <link rel="stylesheet" href="css/cssDangKi.css">
  <link href="image/logo.PNG" rel="shortcut icon" type="image/vnd.microsoft.icon" /> 
</head>
<header style="position: fixed;">
 
  <br><br><br><br>
<body>
 
  
    <div class="main_div">
      <p href = "index.html"><img src = "image\logoChuBlack.PNG" width = "100px" height = "75px" style = "margin-top: -27px;"></p>
     
    

    

      <div class = "title"> Đăng Ký </div> 
      <div class  ="social_icons">
        <a href = "https://www.facebook.com/" style ="margin-left: 5px;
        font-size: 18px; margin-right: 5px;
    background: #4267b2;"><span>Facebook</span></a>
        <a href = "https://twitter.com/" style = "margin-left: 5px;
        font-size: 18px; margin-left: 5px;
    background: #1da1f2;">Twitter</span></a>
      </div>

      <form action="Dangnhap.php" method="post">
      <div class = "input_box">
          <input type="text" id="name" placeholder="Họ và tên" name="name" required>
         

        </div>
        <div class = "input_box">
          <input type="text" id="phone" placeholder="Số điện thoại" name="phone" required>
         

        </div>

        <div class = "input_box">
           <input type="text" id="email" placeholder="Email" name="email" required>
          

        </div>



        <div class = "input_box">
           <input type="date" id="Birthday" placeholder="Ngày sinh" name="birth" required>
          
        </div>

        <div class = "input_box">
           <input type="password" id="password" placeholder="Mật khẩu" name="password" required>
         

        </div>
        
        <div class = "option_div">
          <div class = "check_box">
            <input type = "checkbox" checked="checked" name="remember" >
            <span>Nhớ mật khẩu</span>
          </div>
          <div class = "forget_div">
            <a href = "Dangnhap.php">Bạn đã có tài khoản? </a> <br>
          </div>
          </div>
         
          <div class="clearfix">
            <button onclick="send()" type="submit" class="signupbtn" 
            style = "font-family: 'Times New Roman';margin-top: 25px;
            height: 100%;
   width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 25px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  transition: all 0.3s ease; border-color:grey;background: linear-gradient(to top, lightblue, lightpink);">Đăng Ký</button>
          </div> <br>


      
     
      <a href = "index.html" style = "color: red;">Quay về Trang chủ</a>
   

   



    </form>
  </div>
  
</body>


    
    <script type="text/javascript">
      function send() {
        var frm = document.forms['form1'];
        const phone = document.getElementById("phone").value;
        const password = document.getElementById("password").value;

        if (!/[0-9]{10}/.test(phone)) {
          alert("Số điện thoại của bạn nhập sai định dạng. Vui lòng nhập lại!")
          return;
        }
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

        alert("Đăng ký thành công!");
        frm.action = "index.html";
        frm.submit();



      }
    </script>


  </form>
  <br>
  <br>
  <br>
  <br>
 