<?php

session_start();


$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'baza');

$ID = $_POST['ID'];
$Parola = $_POST['Parola'];

$s = " SELECT * FROM utilizatori where ID = '$ID' && Parola ='$Parola'";
$result = mysqli_query($con,$s);
$num  = mysqli_num_rows($result);

if($num == 1){
   header('location:home.php');

}
else{
    header('location:inregistrare.php');

}


?>
