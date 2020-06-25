<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Registrasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style type="text/css">
    a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
.card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 540px;
  margin: 2rem auto 8.1rem auto;
  width: 329px;
}
.card-content {
  padding: 12px 44px;
}
.card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 3px;
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
  height: 30px;
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
<body>
  <div class="card">
    <div class="card-content">
      <div class="card-title">
        <h2>Registrasi</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <label style="padding-top:10px">Nama</label>
        <input class="form-content" type="text" name="nama" required />
        <div class="form-border"></div>
        <label style="padding-top:10px">Email</label>
        <input class="form-content" type="email" name="email" required />
        <div class="form-border"></div>
        <label style="padding-top:10px">TTL</label>
        <input class="form-content" type="date" name="date" required />
        <div class="form-border"></div>
        <label style="padding-top:10px">Alamat</label>
        <input class="form-content" type="text" name="alamat" required />
        <div class="form-border"></div><br>
        <div><label>Jenis kelamin :</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Pria</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Wanita</label>
        </div><br>
        <label style="padding-top:10px">Jurusan : </label><br>
        <select name="jurusan">
          <option value="">Pilih Jurusan</option>
          <option>Teknik Sipil</option>
          <option>Teknik Geologi</option>
        <div class="form-border"></div>
        <input class="submit-btn" type="submit" name="regis" value="Regis" />
      </form>
    </div>
  </div>
</body>

</html>