<?php

include('db.php');

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$korisnicko_ime = $_POST['korisnicko_ime'];
$lozinka = $_POST['lozinka'];
$plozinka = $_POST['plozinka'];

if ($lozinka != $plozinka) {
	print ("Greška: Lozinke se ne podudaraju");
} else {
	//Izgradnja upita
	$sql = "INSERT INTO korisnik VALUES(null, 
	'".$ime."', '".$prezime."', '".$korisnicko_ime."', '".$lozinka."')";
	//Ubacivanje u bazu
	mysqli_query ($konekcija, $sql);
	//Zatvaranje konekcije
	mysqli_close($konekcija);
}
?>