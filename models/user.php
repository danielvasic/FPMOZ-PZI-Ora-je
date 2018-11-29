<?php
function get_user_login ($korisnicko_ime, $lozinka, $konekcija) {
    $sql = "SELECT * FROM korisnik 
    WHERE korisnicko_ime='".$korisnicko_ime."' 
    AND lozinka='".$lozinka."'";
    
    $result = mysqli_query($konekcija, $sql);
    return mysqli_fetch_assoc($result);
}
?>