<?php
  require_once('function.php');
?>

<?php
$produse = utilizatoriComen();
 ?>
 <?php
 $utilizatori = utilizatori();
 ?>
<html>
<style>
table.utilizatori {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.utilizatori td, table.utilizatori th {
  border: 1px solid #AAAAAA;
  padding: 6px 6px;
}
table.utilizatori tbody td {
  font-size: 13px;
}
table.utilizatori tr:nth-child(even) {
  background: #D0E4F5;
}
table.utilizatori thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.utilizatori thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.utilizatori thead th:first-child {
  border-left: none;
}

table.utilizatori tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.utilizatori tfoot td {
  font-size: 14px;
}
table.utilizatori tfoot .links {
  text-align: right;
}
table.utilizatori tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
</style>
<head>
  <title> Meniu Administrator </title>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  </head>
  <body>
    <section class="mainContent">
      <table>
        <tbody>
          <?php
          /*Afisare utilzatori */

          foreach ($utilizatori as $utilizator) {
          ?>

        <tr>
        <td><?php print $utilizator['ID'];?></td>
        <td><?php print $utilizator['CNP'];?></td>


        <?php } ?>
        </tbody>
          <tr>
                        <th>Nume</th>
              <th>CNP</th>


              <th></th>
          </tr>

      <?php
      foreach ($produse as $produs) {
      ?>
      <!--sunt intre tag-uri de php, deci scriu html-->
      <tr>

          <td><?php print $produs['CNP'];?></td>
          <td><?php print $produs['Model'];?></td>
          <td><?php print $produs['ID'];?></td>
      </tr>
    <?php } ?>

      </div>
    </section>

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

        <h2> Contract </h2>

        <form action ="" method = "POST" enctype="multipart/form-data">



    </div>

    <div class = "Model">
        <label>Model</label>
        <input type="int" name="Model" class="form-control" required>
  </div>

        <div class = "CNP">
          <label>CNP</label>
          <input type="int" name="CNP" class="form-control" required>
    </div>

      <div class = "Numar_Ore">
          <label>Numar_Ore</label>
          <input type="int" name="Numar_Ore" class="form-control" required>
    </div>

    <div class = "Data_Inchiriere">
        <label>Data Inchiriere</label>
        <input type="date" name="Data_Inchiriere" class="form-control" required>
  </div>



  <input type="submit" name="submit" value="submit"/>
  </form>
  <form method="post"">

  </body>
  </html>
  <?php
  // Verificare daca butonul a fost apasat apoi introducere informatii in baza de date.
  ?>

<?php
if(isset($_POST['submit']))
{

    $CNP = $_POST['CNP'];
    $Data_Inchiriere = $_POST['Data_Inchiriere'];
    $Numar_Ore = $_POST['Numar_Ore'];
    $Model = $_POST['Model'];
    adaugaContract($CNP,$Data_Inchiriere,$Numar_Ore,$Model);

  }

 ?>
