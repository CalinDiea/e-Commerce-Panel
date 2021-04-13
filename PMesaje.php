



<?php
  require_once('function.php');
?>

<?php
$mesaje = mesaje();
 ?>

<html>
<head>
  <title> Mesaj </title>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  </head>
  <body>
    <section class="mainContent">
      <table>




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

        <h2> Mesaj </h2>

        <form action ="" method = "POST" enctype="multipart/form-data">



    </div>

    <div class = "Nume">
        <label>Nume</label>
        <input type="text" name="Nume" class="form-control" required>
  </div>

        <div class = "Mesaj">
          <label>Mesaj</label>
          <input type="text" name="Mesaj" class="form-control" required>
    </div>

    <div class = "Model">
      <label>Model bicicleta discutie</label>
      <input type="int" name="Model" class="form-control" required>
</div>


  <input type="submit" name="submit" value="submit"/>
  </form>
  <form method="post"">

  </body>
  </html>
<?php
if(isset($_POST['submit']))
{

    $Nume = $_POST['Nume'];
    $Mesaj = $_POST['Mesaj'];
    $Model = $_POST['Model'];
    adaugaMesaj($Mesaj,$Nume,$Model);

  }

 ?>
<html>
<table>
    <tr>

        <th></th>
    </tr>


</html>
