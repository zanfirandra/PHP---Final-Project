<header id="banner"></header>
<nav id="meniu" class="active">
    <ul>
        <li><a href="index.php?p=1">Inregistrare angajat</a></li>
        <li><a href="index.php">Conectare</a></li>
    </ul>
</nav>
<section>
    <?php 
    if(isset($_GET['p'])){
        if($_GET['p']==1){
            require_once 'pagini/p1/inregistrare.php';
        } else {
            require_once 'pagini/eroare.php';
        }
    } else {
        require_once 'pagini/p1/conectare.php';
    }
    ?>
    
</section>