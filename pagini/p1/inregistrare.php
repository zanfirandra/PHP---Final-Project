<h2>Formular inregistrare angajat</h2>
<form method="post">
    <table class="active">
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="register" value="Register!"></td>
        </tr>
    </table>
    
</form>
<?php 
if(isset($_POST['register'])){
    $n=$_POST['name'];
    $p=$_POST['pass'];
    require_once 'functii/sql_functions.php';
    $user=  inregistrare($n, $p);
    if($user){
        print "<h3 style='color:green;'>Inregistrare reusita!</h3>";
    } else {
        print "<h3 style='color:red;'>Inregistrare esuata!</h3>";
    }
}
?>