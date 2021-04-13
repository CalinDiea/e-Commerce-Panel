<?php

session_start();
header('location:logare.php');

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'baza');

$ID = $_POST['ID'];
$Parola = $_POST['Parola'];
$CNP = $_POST['CNP'];

$s = " SELECT * FROM utilizatori where ID = '$ID'";
$result = mysqli_query($con,$s);
$num  = mysqli_num_rows($result);

if($num == 1){
    echo "ID deja inregistrat!";

}
else{
    $reg = "insert into utilizatori(ID,Parola,CNP) values ('$ID', '$Parola', '$CNP')";
    mysqli_query($con,$reg);
    echo "Te-ai inregistrat cu succes";
}


?>
