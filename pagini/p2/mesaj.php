<form method="post">
    <textarea placeholder="Scrie mesaj" name="mesaj"></textarea>
    <input type="submit" name="send" value="Trimite mesaj">    
</form>
<?php 
if(isset($_POST['send'])){
    require_once 'functii/sql_functions.php';
    $mesaj=$_POST['mesaj'];
    $s = $_SESSION['user'];
    $r = $_GET['id'];
    $r = cauta_dupa_id($r);
    $nume_r = $r['username'];
    
    $rez=  trimitemesaj($mesaj,$s,$nume_r); 
    if($rez){
        print"<h2 style='color:green;'>mesajul a fost trimis!</h2>";
    } else {
        print "mesajul nu a fost trimis";
    }
}

?>