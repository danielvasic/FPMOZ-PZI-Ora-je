<?php

include("db.php");

$korisnicko_ime = $_POST['korisnicko_ime'];
$lozinka = $_POST['lozinka'];

$sql = "SELECT * FROM korisnik 
WHERE korisnicko_ime='".$korisnicko_ime."' 
AND lozinka='".$lozinka."'";

$rezultat = mysqli_query($konekcija, $sql);
if (mysqli_num_rows($rezultat) == 0) {
    print("<b>Greška</b> korisnik ne postoji u bazi.");
} else {
    print ("Uspješno ste prijavljeni na sustav.");
}

mysqli_close($konekcija);