<!DOCTYPE html>
<html>
<head>
  <title>Mahasiswa</title>
  <link rel="stylesheet" type="text/css" >
  <style type="text/css">
    label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
.bungkus{
  display: flex;
  justify-content:space-around; ;
}
h2.inactive {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}
.card{
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 0 auto;
  margin-top: 195px;
  margin-right: 120px;
  width: 329px;
}
.card-content {
  padding: 12px 44px;
}
.card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 1px;
  text-align: center;
}
.signup {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
.submit-btn {
  background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 20px;
  transition: 0.25s;
  width: 153px;
}
.submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}
  </style>
</head>
<body style="background-image: url('foto1.png');background-size : cover;">
<div class="card">
    <div class="card-content">
      <div class="bungkus">
      <a href="admin.php"><h2 class="active"> Admin </h2></a>
      <h2 class="inactive underlineHover">Mahasiswa </h2>
    </div>
      <div class="card-title">
        <h2>Login</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <label style="padding-top:13px">Username</label>
        <input class="form-content" type="text" name="user" autocomplete="on" required />
        <div class="form-border"></div>
        <label style="padding-top:22px">Password</label>
        <input class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input class="submit-btn" type="submit" name="submit" value="LOGIN" />
         <a href="regis.php" class="signup">Registration !</a>
      </form>
    </div>
  </div>
 </div>
</body>
</html>