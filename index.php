<?php
session_start();

include ("db.php");
include ("utils.php");

$view = "login";

if (isset($_GET['view'])) {
    $view = $_GET['view'];
}

$params = array();

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php?view=login");
}

if (isset($_SESSION['korisnicko_ime']) && 
    isset($_SESSION['lozinka'])) {
        include("models/user.php");
        $user = get_user_login(
            $_SESSION['korisnicko_ime'],
            $_SESSION['lozinka'], $konekcija
        );
        $view = "admin";
        $params = array ('user' => $user);
}
include("models/post.php");
if (isset($_GET['posts'])) {
    if ($_GET['posts'] == 'new') {
        $naziv = $_POST['naziv'];
        $tekst = $_POST['tekst'];
        add_post($naziv, $tekst, $user['id'], $konekcija);
    }

    if ($_GET['posts'] == 'delete') {
        $id = $_GET['id'];
        delete_post($id, $konekcija);
    }

    if ($_GET['posts'] == 'edit') {
        $id = $_GET['id'];
        $edit_post = get_post($id, $konekcija);
        if (isset($_POST['objava'])) {
            edit_post($id, $_POST['naziv'], $_POST['tekst'], $user['id'], $konekcija);
        }
        $params['edit_post'] = $edit_post;
    }
    
}
$params['posts'] = get_posts($konekcija);

load_view("views/static/header.php", array("title" => "Prijava na sustav"));
load_view("views/$view.php", $params);
load_view("views/static/footer.php");