
<?php
function conectare($host = 'localhost',
                    $user = 'root',
                    $password = '',
                    $database = 'baza'
                  )
{
return mysqli_connect($host, $user, $password, $database);
}
//session_start();
//header('location:meniu_admin.php');

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'baza');

function adaugaBicicleta($Tarif,$Model,$Locatie)

{
  $link = conectare();
  $reg = "insert into tarif_bicicleta(Tarif,Model,Locatie) values ('$Tarif','$Model','$Locatie')";
  mysqli_query($link,$reg);

}

/*Pentru introducere produs */

function adaugaInformatiiBicicleta($Culoare,$Model,$Material,$Categorie,$Poza)
{
    $link = conectare();
    $reg = "insert into informatii_bicicleta(Culoare,Model,Material,Categorie,Poza) values ('$Culoare','$Model','$Material','$Categorie','$Poza')";
    mysqli_query($link,$reg);



}
/* Pentru a introduce la in baza 'locatie' locatia bicicletelor */
function adaugaLocatieBicicleta($Locatie,$Sector,$Model)
{
    $link = conectare();
    $reg = "insert into locatie_bicicleta(Locatie,Sector,Model) values ('$Locatie','$Sector',$Model)";
    mysqli_query($link,$reg);

}
/* Pentru a curata tabelele */

function stergeTabel()
{
$link = conectare();
$reg = "TRUNCATE TABLE `tarif_bicicleta`";
mysqli_query($link,$reg);
$reg = "TRUNCATE TABLE `informatii_bicicleta`";
mysqli_query($link,$reg);
$reg = "TRUNCATE TABLE `locatie_bicicleta`";
mysqli_query($link,$reg);
}

function produse()
{
$link = conectare();
$query = "SELECT * FROM informatii_bicicleta JOIN tarif_bicicleta ON informatii_bicicleta.Model = tarif_bicicleta.Model";
$rezultat = mysqli_query($link, $query);
$produse = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
return $produse;
}
/*Pentru a lista pretul unui produs dupa zona in care este inchiriat.*/
function iproduse()
{
$link = conectare();
$query = "SELECT * FROM tarif_bicicleta i JOIN locatie_bicicleta l ON i.Model = l.Model";
$rezultat = mysqli_query($link, $query);
$produse = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
return $produse;
}
/*Pentru a afisa atat tariful unei biciclete cat si anumite
specificatii ale bicicletelei inchiriate folosim*/
function informatieProdus()
{
$link = conectare();
$query = "SELECT * FROM tarif_bicicleta join informatii_bicicleta";
$rezultat = mysqli_query($link, $query);
$informatii = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
return $informatii;
}


function utilizatori()
{
$link = conectare();
$query = "SELECT * FROM utilizatori";
$rezultat = mysqli_query($link, $query);
$utilizatori = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
return $utilizatori;
}

function stergeUtilizator($CNP)
{
$link = conectare();
$reg = "delete from utilizatori where CNP = $CNP";
mysqli_query($link,$reg);
}

function stergeBicicleta($Model)
{
$link = conectare();
$reg = "delete from utilizatori where CNP = $CNP";
mysqli_query($link,$reg);
}

/*Functie pentru adaugarea in contract a ID-ului bicicletei inchiriate.
*/
function adaugaContract($CNP,$Data_Inchiriere,$Numar_Ore,$Model)
{
    $link = conectare();
    $reg = "insert into contract(CNP,Data_Inchiriere,Numar_Ore,Model) values ('$CNP','$Data_Inchiriere','$Numar_Ore','$Model')";
    mysqli_query($link,$reg);
    $sql = "UPDATE tarif_bicicleta SET Stoc = Stoc - 1 where Model = $Model";
    mysqli_query($link,$sql);
    $reg = "UPDATE contract c SET c.ID_Bicicleta = (Select ID_Bicicleta from tarif_bicicleta where Model = $Model)";
    mysqli_query($link,$reg);
}

/*Pentru a afisa atat informatiile contractului cat si anumite specificatii ale bicicletelei inchiriate folosim
*/

function contracte()
{
$link = conectare();
$query = "SELECT * FROM contract c join informatii_bicicleta ip on c.Model=ip.Model";
$rezultat = mysqli_query($link, $query);
$contracte = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
return $contracte;
}
/*Functie complexa utilizata in Functii speciale pentru a afisa clientii ce fost inregistrati dar nu au
inchiriat pana acum.*/

function minimComenzi()
{
$link = conectare();
$query = "select u.ID from utilizatori u
where u.CNP not in (select CNP from contract)";
$rezultat = mysqli_query($link, $query);
$utilizatori = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
return $utilizatori;
}

function topContracte($b)
{
$link = conectare();
$query = "select a.ID as 'Nume' ,Data_Inchiriere
from utilizatori a
join contract d on a.CNP = d.CNP where (select count(*) from contract where CNP = d.CNP) >= $b";
$rezultat = mysqli_query($link, $query);
$utilizatori = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
return $utilizatori;
}

function topOreContract($a)
{
$link = conectare();
$query = "select Numar_Contract,Numar_Ore
from contract c
where c.Numar_ore >=
any (select $a*Numar_ore from Contract where Numar_Contract != c.Numar_Contract)";
$rezultat = mysqli_query($link, $query);
$utilizatori = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
return $utilizatori;
}
/*Functia utilizatoriComen() are rolul de a face conexiunea intre cele doua tabele pentru afisarea
contractelor si a utilizatorilor ce detin contractele.
*/

function utilizatoriComen()
{
  $link = conectare();
  $query = "SELECT * FROM utilizatori i JOIN contract l ON i.CNP = l.CNP";
  $rezultat = mysqli_query($link, $query);
  $produse = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
  return $produse;
}


function adaugaMesaj($Nume,$Mesaj,$Model)
{
    $link = conectare();
    $reg = "insert into mesaje(Mesaj,Nume,Model) values ('$Mesaj','$Nume','$Model')";
    mysqli_query($link,$reg);

}
/* Posibilitate de a lasa mesaje legate de produse si diverse erori intalnite de angajati in platforma, cat si
de comunicare intre un numar mai mare de angajati. Functia mesaje() va permite vizualizarea
mesajului impreuna cu poza produsului la care se face referire.*/

function mesaje()
{
  $link = conectare();
  $query = "SELECT * FROM mesaje m join informatii_bicicleta t on m.Model = t.Model";
  $rezultat = mysqli_query($link, $query);
  $mesaje = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
  return $mesaje;
}

/* Pentru introducere mesaje tip reclamatie */

function problemaUtilizator($CNP,$Problema)
{
  $link = conectare();
  $reg = "insert into probleme_utilizatori(CNP,Problema) values ('$CNP','$Problema')";
  mysqli_query($link,$reg);
}
/*De altfel platforma include o metoda de a inregistra diverse probleme intalnite cu contractantii
serviciului. Functia utilizatoriP() permite vizualizarea mesajelor lasate si a clientilor la care se face
referinta.*/

function utilizatoriP()
{
  $link = conectare();
  $query = "SELECT * FROM utilizatori u join probleme_utilizatori p on u.CNP=P.CNP";
  $rezultat = mysqli_query($link, $query);
  $utilizatori = mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
  return $utilizatori;
}

?>
