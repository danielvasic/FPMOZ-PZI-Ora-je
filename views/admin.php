<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Blog system</a>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <?php print ($user['ime']. " " . $user['prezime']); ?>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?logout=logout">Odjava</a>
            </div>
        </li>
    </ul>
</nav>
<div class="row">
    <div class="col">
        <form method="POST" action="index.php?posts=<?php if (isset($edit_post)){?>edit&id=<?=$edit_post['id']?><?php } else {?>new<?php } ?>">
            <div class="form-group">
                <label for="korisnicko_ime">Naziv:</label>
                <div class="input-group">
                    <input type="text" value="<?php if(isset($edit_post)) print($edit_post['naziv']);?>" name="naziv" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="lozinka">Text:</label>
                <textarea name="tekst" class="form-control"><?php if(isset($edit_post)) print($edit_post['tekst']);?></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="objava">
<?php if (isset($edit_post)){ ?>Uredi objavu<?php } else { ?>Dodaj objavu<?php }?>
            </button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <tr>
                <td>Id</td>
                <td>Naslov</td>
                <td>Tekst</td>
                <td>Datum</td>
                <td>Autor</td>
                <td>Akcije</td>
            </tr>
            <?php foreach ($posts as $post) { ?>
                <tr>
                    <td><?php print($post['post_id']); ?></td>
                    <td><?php print($post['naziv']); ?></td>
                    <td><?php print($post['tekst']); ?></td>
                    <td><?php print($post['datum']); ?></td>
                    <td><?php print($post['ime']. " " .$post['prezime']); ?></td>
                    <td>
                        <a class="btn btn-danger btn-sm"
                    href="index.php?posts=delete&id=<?php print($post['post_id']); ?>">Pobriši</a>
                    <a class="btn btn-default btn-sm"
                    href="index.php?posts=edit&id=<?php print($post['post_id']); ?>">Uredi</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>