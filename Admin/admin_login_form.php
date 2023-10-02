


<head>
    <meta charset="utf-8">
    <title>Login_form</title>
    <link rel="stylesheet" href="../css/login_style.css">
  </head>

<body>
  <div class = "center">
      <h1>
          Admin Login
      </h1>
      <form  method="POST" action="adminlogin.php" autocomplete="on">
      <div class="txt_field">
          <input id="username" name="un" required="required" type="text"/>
          <span></span>
          <label for="username" class="uname" data-icon="u" > Username </label>
      </div>
      <div class="txt_field">
        <input id="password" name="pass" required="required" type="password"/>
        <span></span>
        <label for="password" class="youpasswd" data-icon="p">Password </label>
      </div>



  <p class="login button">
      <input type="submit" name="login" value="Login" />
  </p>
  


  <div class = "signup_link">

  </div>


</div>

</form>
</body>
