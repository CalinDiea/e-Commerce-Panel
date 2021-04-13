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
            <li><a href="special.php" title="Link">Utilizatori</a></li></ul>
          </nav>
  </div>
  <div class="container">
  <div class="col-md-8 inregistrare-dreapta">

        <h2> Contract </h2>

        <form action ="" method = "POST" enctype="multipart/form-data">



    </div>

    <div class = "a">
        <label>Model</label>
        <input type="int" name="a" class="form-control" required>
  </div>

        <div class = "b">
          <label>CNP</label>
          <input type="int" name="b" class="form-control" required>
    </div>





  <input type="submit" name="submit" value="submit"/>
  </form>
  <form method="post"">

  </body>
  </html>
<?php
if(isset($_POST['submit']))
{

    $a = $_POST['a'];
    $b = $_POST['b'];

    topContracte($a);
    topOreContract($b);

  }

 ?>
