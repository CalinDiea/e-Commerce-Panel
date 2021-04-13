<html>
<head>
<title> Logare utilizator </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

<div class="container">
    <div class="login-box">


    <div class = "row">
      <div class="col-md-8 login-stanga">

          <h2> Logheaza-te </h2>
          <form action = "validare.php" method = "post">
          <div class = "form-group">
            <label>Nume</label>
            <input type="text" name="ID" class="form-control" required>
      </div>
      <div class = "form-group">
        <label>Parola</label>
        <input type="password" name="Parola" class="form-control" required>
  </div>
  <button type="submit" class = "btn btn-primary"> Logheaza-te </button>
</form>
  </div>


  <div class="col-md-8 inregistrare-dreapta">

      <h2> Inregistreaza-te </h2>
      <form action = "inregistrare.php" method = "post">
      <div class = "form-group">
        <label>Nume</label>
        <input type="text" name="ID" class="form-control" required>
  </div>
  <div class = "form-group">
    <label>Parola</label>
    <input type="password" name="Parola" class="form-control" required>
</div>
<div class = "form-group">
  <label>CNP</label>
  <input type="text" name="CNP" class="form-control" required>
</div>
<button type="submit" class = "btn btn-primary"> Inregistreaza </button>
</form>
</div>

</div>
</body>
</html>
