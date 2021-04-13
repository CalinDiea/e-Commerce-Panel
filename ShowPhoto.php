<?php
  require_once('function.php');
?>


<?php
$produse = produse()
 ?>

 <table>

<?php
   foreach ($produse as $produs) {
   ?>
<tr>
   <td><?php print $produs['Culoare'];?></td>
   <td><?php print $produs['Model'];?></td>
   <td>
  </td>
 </tr>
<?php } ?>
