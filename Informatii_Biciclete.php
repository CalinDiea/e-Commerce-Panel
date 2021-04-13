<?php
  require_once('function.php');
?>
<?php
$produse = iProduse();
 ?>

<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta charset="utf-8">
<title>Depozit Biciclete</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="haz/eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">

<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>

<div id="mainWrapper">




  </section>
  <div id="content">
    <section class="sidebar">
      <div id="menubar">
        <nav class="menu">
          <h2>Administrare</h2>
          <hr>
          <ul>

                        <li><a href="home.php" title="Link">Home</a></li>
            <li><a href="inregistreaza_comanda.php" title="Link">Inregistreaza Comanda</a></li>
            <li><a href="meniu_admin.php" title="Link">Adauga Produs</a></li>
            <li><a href="utilizatori.php" title="Link">Clienti</a></li>
            <li><a href="logare.php" title="Link">Inregistreaza Client</a></li>
                        <li><a href="special.php" title="Link">Functii Speciale</a></li>
                        <li><a href="Contracte.php" title="Link">Contracte</a></li>
                        <li><a href="Informatii_Biciclete.php" title="Link">Informatii Biciclete</a></li>
          </ul>
        </nav>
</div>
    </section>
    <section class="mainContent">
      <table>
          <tr>
              <th>Locatie</th>
              <th>Sector</th>
              <th>Model</th>
                <th>Stoc</th>
              <th></th>
          </tr>
          <?php
          // Pentru modificare informatiilor.
          ?>
      <?php
      foreach ($produse as $produs) {
      ?>

      <tr>
          <td><?php print $produs['Locatie'];?></td>
          <td><?php print $produs['Sector'];?></td>
          <td><?php print $produs['Model'];?> </td>
          <td><?php print $produs['Stoc'];?> </td>
      </tr>
    <?php } ?>

      </div>
    </section>
  </div>
  <footer>

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
