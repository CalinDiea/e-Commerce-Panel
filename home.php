<?php
  require_once('function.php');
?>
<?php
$produse = Produse();
 ?>

<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta charset="utf-8">
<title>Depozit Biciclete</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="haz/eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>

<div id="mainWrapper">




  </section>
  <div id="content">
    <section class="sidebar">
      <div id="menubar">
        <nav class="menu">
          <h2><!-- Title for menuset 1 -->Administrare</h2>
          <hr>
          <ul>
            <!-- List of links under menuset 1 -->
                        <li><a href="home.php" title="Link">Home</a></li>
            <li><a href="inregistreaza_comanda.php" title="Link">Inregistreaza Comanda</a></li>
            <li><a href="meniu_admin.php" title="Link">Adauga Produs</a></li>
            <li><a href="utilizatori.php" title="Link">Clienti</a></li>
            <li><a href="logare.php" title="Link">Inregistreaza Client</a></li>
                        <li><a href="special.php" title="Link">Functii Speciale</a></li>
                        <li><a href="Contracte.php" title="Link">Contracte</a></li>
                        <li><a href="Informatii_Biciclete.php" title="Link">Informatii Biciclete</a></li>
                        <li><a href="PMesaje.php" title="Link">Posteaza problema bicicleta</a></li>
                        <li><a href="CitesteMesaje.php" title="Link">Verifica probleme raportate</a></li>
                        <li><a href="problemeClienti.php" title="Link">Raporteaza incidente client</a></li>
                        <li><a href="problemeClientiview.php" title="Link">Vezi probleme clienti</a></li>
          </ul>
        </nav>
</div>
    </section>
    <section class="mainContent">
      <table>
          <tr>
              <th>Model</th>
              <th>Tarif</th>
              <th>Stoc</th>
              <th>Locatie</th>
              <th></th>
          </tr>

      <?php
      foreach ($produse as $produs) {
      ?>
      <!--sunt intre tag-uri de php, deci scriu html-->
      <tr>

          <td><?php print $produs['Model'];?></td>
          <td><?php print $produs['Tarif'];?> LEI</td>
          <td><?php print $produs['Stoc'];?></td>
          <td><?php print $produs['Locatie'];?></td>
          <td>
            <img width="250px" src="imagini/<?php print (!empty($produs['Poza'])) ? $produs['Poza'] : 'no_img.jpg'; ?>"/>
          </td>
          <?php
          echo
          '<td><form action = "" method="POST"><input type="hidden" name="id" value=' .$produs['ID_Bicicleta'].'>
            <input type = "submit" class="btn btn-sm btn-danger" name="submit" value="Delete"></form></td>';
?>
  <?php
            echo
            '<td><form action = "" method="POST"><input type="hidden" name="id2" value=' .$produs['ID_Bicicleta'].'>
              <input type = "submit" class="btn btn-sm btn-danger" name="adauga" value="Adauga stoc"></form></td>';
?>
  <?php
              echo
              '<td><form action = "" method="POST"><input type="hidden" name="id3" value=' .$produs['ID_Bicicleta'].'>
                <input type = "submit" class="btn btn-sm btn-danger" name="scade" value="Scade stoc"></form></td>';
      ?>



      </tr>



    <?php } ?>
    <?php
    if(isset($_REQUEST['submit'])){
    $link = conectare();
    $sql = "DELETE FROM tarif_bicicleta WHERE ID_Bicicleta = {$_REQUEST['id']}";
    mysqli_query($link,$sql);
    }


    elseif(isset($_REQUEST['adauga'])){
    $link = conectare();
    $sql = "UPDATE tarif_bicicleta SET Stoc = Stoc + 1 where ID_Bicicleta = {$_REQUEST['id2']}";
    mysqli_query($link,$sql);
    }


    elseif(isset($_REQUEST['scade'])){
    $link = conectare();
    $sql = "UPDATE tarif_bicicleta SET Stoc = Stoc - 1 where ID_Bicicleta = {$_REQUEST['id3']}";
    mysqli_query($link,$sql);
    }
    ?>
      </div>
    </section>
  </div>
  <footer>
    <!-- This is the footer with default 3 divs -->
    <div>
      <p>&nbsp;</p>
    </div>
    <div>
      <p>&nbsp;</p>
    </div>
</footer>
</div>
</body>
</html>
