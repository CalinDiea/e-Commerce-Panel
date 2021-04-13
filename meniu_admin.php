<?php
  require_once('function.php');
?>

<html>
<head>
<title> Meniu Administrator </title>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

<div id="menubar">
        <nav class="menu">
          <h2><!-- Title for menuset 1 -->Meniu Administrator</h2>
          <hr>
          <ul>
            <!-- List of links under menuset 1 -->
            <li><a href="home.php" title="Link">Home</a></li>
          </ul>
          <ul>
          <li><a href="utilizatori.php" title="Link">Utilizatori</a></li></ul>
        </nav>
</div>
<div class="container">
<div class="col-md-8 inregistrare-dreapta">

      <h2> Inregistreaza Bicicleta </h2>

      <form action ="" method = "POST" enctype="multipart/form-data">

        <label>Poza</label>
        <input type="file" id="img" name="img" ">
  </div>

  <div class = "Tarif">
      <label>Tarif</label>
      <input type="int" name="Tarif" class="form-control" required>
</div>

      <div class = "Model">
        <label>Model</label>
        <input type="int" name="Model" class="form-control" required>
  </div>

    <div class = "Locatie">
        <label>Locatie</label>
        <input type="text" name="Locatie" class="form-control" required>
  </div>

  <div class = "Culoare">
      <label>Culoare</label>
      <input type="text" name="Culoare" class="form-control" required>
</div>

<div class = "Material">
    <label>Material</label>
    <input type="text" name="Material" class="form-control" required>
</div>

<div class = "Sector">
    <label>Sector</label>
    <input type="int" name="Sector" class="form-control" required>
</div>

<div class = "Categorie">
    <label>Categorie</label>
    <input type="text" name="Categorie" class="form-control" required>
</div>
<input type="submit" name="submit" value="submit"/>
</form>
<form method="post"">
<input type="submit" id='delete' class='delete' name="delete" value='Sterge Biciclete'></input>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
    $Tarif = $_POST['Tarif'];
    $Model = $_POST['Model'];
    $Locatie = $_POST['Locatie'];
    $Culoare = $_POST['Culoare'];
    $Material = $_POST['Material'];
    $Categorie = $_POST['Categorie'];
    $Sector = $_POST['Sector'];
    if (isset($_FILES['img'])) {
    $Poza = uniqid() . $_FILES['img']['name'];
    $salvareServer = move_uploaded_file(
                    $_FILES['img']['tmp_name'],
                    'imagini/' . $Poza
                );
              };
              adaugaInformatiiBicicleta($Culoare,$Model,$Material,$Categorie,$Poza);
              adaugaBicicleta($Tarif,$Model,$Locatie);
              adaugaLocatieBicicleta($Locatie,$Sector,$Model);
              

}

if(isset($_POST['delete'])){ // code for SQL command to truncate }
stergeTabel();
}


 ?>
