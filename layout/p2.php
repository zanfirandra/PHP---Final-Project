<header id="banner"></header>
<nav id="meniu">
    <ul>
        <li><a href="index.php?">Vizualizare angajati</a></li>
        <li><a href="index.php?p=2">Mesajele mele</a></li>
        <li><a href="index.php?logout">Logout,<?php print $_SESSION['user']; ?></a></li>
    </ul>
</nav>
<section>
    <?php
    if (isset($_GET['p'])) {
        switch ($_GET['p']) {
            case 1: require_once 'pagini/p2/mesaj.php';  // la apasare pe "Trimite mesaj" p=1 din p2/vizualizare.php
                break;
            case 2: require_once 'pagini/p2/viz_mesaje.php';
                break;
            default : require_once 'pagini/p2/eroare.php';
        }
    } else
        require_once 'pagini/p2/vizualizare.php';
    ?>

</section>