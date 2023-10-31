<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration </title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Google Font Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #3632a8;
  padding: 30px;
}
.container{
  position: relative;
  max-width: 550px;
  width: 100%;
  background: #fff;
  padding: 40px 30px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  perspective: 2700px;
}

.container .forms{
  height: 100%;
  width: 100%;
  background: #fff;
}

.form-content .login-form{
  width: calc(100% / 2 - 25px);
}
.forms .form-content .title{
  position: relative;
  font-size: 24px;
  font-weight: 500;
  color: #333;
}
.forms .form-content .title:before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 25px;
  background: #2b00ff;
}
.forms .signup-form  .title:before{
  width: 20px;
}
.forms .form-content .input-boxes{
  margin-top: 30px;
}
.forms .form-content .input-box{
  display: flex;
  align-items: center;
  height: 50px;
  width: 100%;
  margin: 10px 0;
  position: relative;
}
.form-content .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  padding: 0 30px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px solid rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
  border-color: #2b00ff;
}
.form-content .input-box i{
  position: absolute;
  color: #2b00ff;
  font-size: 17px;
}
.forms .form-content .text{
  font-size: 14px;
  font-weight: 500;
  color: #333;
}
.forms .form-content .text a{
  text-decoration: none;
}
.forms .form-content .text a:hover{
  text-decoration: underline;
}
.forms .form-content .button{
  color: #fff;
  margin-top: 40px;
}
.forms .form-content .button input{
  color: #fff;
  background: #2b00ff;
  border-radius: 6px;
  padding: 0;
  cursor: pointer;
  transition: all 0.4s ease;
}
.forms .form-content .button input:hover{
  background: #5b13b9;
}

.form-content .login-form{
    width: 100%;
}
    </style>

   </head>
    <body>
        <div class="container">
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                    <div class="title">Registration</div>
                        <form action='/signup-user' method="POST">
                            @csrf
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="full_name" placeholder="Enter your Fullname" /><br />
                            </div>
                            <div class="input-box">
                                <i class="fas fa-phone"></i>
                                <input type="number" name="user_tel" placeholder="Enter your Number" /><br />
                            </div>
                            <div class="input-box">
                            <i class="fas fa-envelope"></i>
                                <input type="text" name="email" placeholder="Enter your email" /><br />
                            </div>
                            <div class="input-box">
                                 <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Enter your password"/><br />
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Sumbit">
                            </div>
                            <div class="text sign-up-text">
                                Don't have an account? <a style="color: blue" href="/login">Login now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>