<h2>Conectare</h2>
<form method="post">
    <table>
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="parola"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="conectare" value="Conectare!"></td>
        </tr>
    </table>

</form>
<?php
if (isset($_SESSION['eroare_login'])) {
    unset($_SESSION['eroare_login']);
}
?>