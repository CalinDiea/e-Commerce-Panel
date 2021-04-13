



<?php
require_once('function.php');
?>

<?php
$contracte = contracte();
?>

<!DOCTYPE html>
<html>
<head>
  <title> Contracte </title>

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
<th>CNP</th>
<th>Numar Contract</th>
<th>Data Inchiriere</th>
<th>Ore inchiriere</th>
<th>Categorie</th>
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
  foreach ($contracte as $contract) {
  ?>
<tr>
<td><?php print $contract['CNP'];?></td>
<td><?php print $contract['Numar_Contract'];?></td>
<td><?php print $contract['Data_Inchiriere'];?></td>
<td><?php print $contract['Numar_Ore'];?></td>
<td><?php print $contract['Categorie'];?></td>
<?php
echo
'<td><form action = "" method="POST"><input type="hidden" name="id" value=' .$contract['Numar_Contract'].'>
  <input type = "submit" class="btn btn-sm btn-danger" name="submit" value="Delete"></form></td>';
  ?>
</tr>

<?php


?>
<?php } ?>

<?php

if(isset($_REQUEST['submit'])){
$link = conectare();
$sql = "DELETE FROM contract WHERE Numar_Contract = {$_REQUEST['id']}";
mysqli_query($link,$sql);
}
?>

</tbody>
</table>

</html>




</div>
