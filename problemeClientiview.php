



<?php
require_once('function.php');
?>

<?php
$utilizatori = utilizatoriP();
?>

<!DOCTYPE html>
<html>
<head>
  <title> Meniu Administrator </title>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  </head>
  <body>

  <div id="menubar">
          <nav class="menu">
            <h2>Meniu Administrator</h2>
            <hr>
            <ul>
              <li><a href="meniu_admin.php" title="Link">Meniu Administrator
              </a></li>
            </ul>
            <ul>
              <li><a href="home.php" title="Link">Home</a></li>
            </ul>
            <ul>
            <li><a href="utilizatori.php" title="Link">Utilizatori</a></li></ul>
          </nav>
  </div>
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
</head>


<p>&nbsp;</p>
<table class="utilizatori">
<thead>
<tr>
<th>ID</th>
<th>CNP</th>
<th></th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="3">
<div class="links">&nbsp;</div>
</td>
</tr>
</tfoot>
<tbody>
  <?php
  foreach ($utilizatori as $utilizator) {
  ?>

<tr>
<td><?php print $utilizator['ID'];?></td>
<td><?php print $utilizator['CNP'];?></td>
<td><?php print $utilizator['Problema'];?></td>
<?php
echo
'<td><form action = "" method="POST"><input type="hidden" name="id" value='.$utilizator['CNP'].'>
  <input type = "submit" class="btn btn-sm btn-danger" name="submit" value="Rezolvat"></form></td>';
  ?>
</tr>

<?php } ?>
</tbody>
<?php

if(isset($_REQUEST['submit'])){
$link = conectare();
$sql = "DELETE FROM probleme_utilizatori WHERE CNP = {$_REQUEST['id']}";
mysqli_query($link,$sql);
}
?>
</table>

</html>




</div>
