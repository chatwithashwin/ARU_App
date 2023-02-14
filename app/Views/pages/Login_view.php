<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./css/style.css">
  <script  src="./js/script.js"></script>
</head>
<body style="background-image: url('./images/images1.jpg');">
<div class="login-form">
  <form id="Signin" action="./homepage">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" id="username" placeholder="Username" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" id="password" placeholder="Password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
  </form>
  
  <div class="action">
  <button onclick="Click_Register()" >Register</button>
  <button onclick="Click_SignIn()">Sign in</button>
  </div>
</div>

  

</body>
</html>
