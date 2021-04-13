



<?php
require_once('function.php');
?>

<?php
$utilizatori = minimComenzi();
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
<th>Nume persoane inregistrate care nu au comandat</th>

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

<?php } ?>
</tbody>
</table>

<table class="utilizatori">
<thead>
<tr>
<th>Nume persoane care au cel putin n contracte</th>
<th>Data inchiriere</th>

</tr>
</thead>
<tfoot>
<tr>
<td colspan="3">
<div class="links">&nbsp;</div>
</td>
</tr>
</tfoot>
<div class = "Container">
  <form action = "" method ="POST">
    <input type = "text" name = "idu" placeholder = "Adauga variabila" />
    <input type = "submit" name = "search2" value="Cauta">
  </form>


<?php
if(isset($_POST['search2']))
{
  $bx = $_POST['idu'];
  $utilizatori = topContracte($bx);
  $a = 2;
}
 ?>

<tbody>



  <?php
  foreach ($utilizatori as $utilizator) {
  ?>

<tr>
<td><?php print $utilizator['Nume'];?></td>
<td><?php print $utilizator['Data_Inchiriere'];?></td>


<?php } ?>
</tbody>
</table>

<table class="utilizatori">
<thead>
  <th> Numar Contract cu numar ore mai mare de n ori decat celelalte contracte </th>
  <th> Numar ore </th>
<tr>


</tr>
</thead>
<tfoot>
<tr>

<td colspan="3">
<div class="links">&nbsp;</div>
</td>
</tr>
</tfoot>



<div class = "Container">
  <form action = "" method ="POST">
    <input type = "text" name = "id" placeholder = "Adauga variabila" />
    <input type = "submit" name = "search" value="Cauta">
  </form>


<?php
if(isset($_POST['search']))
{
$a = $_POST['id'];
  $utilizatori = topOreContract($a);
}
 ?>




<tbody>




  <?php


  $xa=1;

  ?>

  <?php
  foreach ($utilizatori as $utilizator) {
  ?>

<tr>
<td><?php print $utilizator['Numar_Contract'];?></td>
<td><?php print $utilizator['Numar_Ore'];?></td>


<?php } ?>
</tbody>
</table>


</html>




</div>
