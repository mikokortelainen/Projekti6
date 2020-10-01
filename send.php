<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ilmoitus";

// Luo yhteys
$conn = new mysqli($servername, $username, $password, $dbname);
// Tarkista yhteys
if ($conn->connect_error) {
  die("Yhteys epäonnistui: " . $conn->connect_error);
}

// Määrittelee lähetettävien tietojen nimet.
$sukunimi = $_POST['sukunimi'];
$etunimi = $_POST['etunimi'];
$osoite = $_POST['osoite'];
$postinumero = $_POST['postinumero'];
$puhelin = $_POST['puhelin'];
$sposti = $_POST['sposti'];
$svuosi = $_POST['svuosi'];



// Lisää tiedot databasen tableen.
$sql = "INSERT INTO tiedot (sukunimi, etunimi, osoite, postinumero, puhelin, sposti, svuosi)
values ('$sukunimi', '$etunimi', '$osoite', '$postinumero', '$puhelin', '$sposti', '$svuosi')";


if ($conn->query($sql) === TRUE) {
  header('Location: valmis.php');
} else {
  header('Location: error.html');
  //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
