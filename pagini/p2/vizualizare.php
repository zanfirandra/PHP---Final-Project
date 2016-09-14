<h2>Lista angajati</h2>
<table border="1">
    <tr>
        <th style="padding: 5px; align-content: center">User</th>
        <th></th>
    </tr>
    <?php
    require_once 'functii/sql_functions.php';
    $ang = angajati();
    foreach ($ang as $pers) {
        if ($pers['username'] != $_SESSION['user']) {
            ?>
            <tr>
                <td style="padding: 5px; align-content: center"><?php print $pers['username']; ?></td>
                <td style="padding: 5px; align-content: center"><a href="index.php?p=1&id=<?php print $pers['id'] ?>">Trimite mesaj</a></td>

            </tr>
    <?php }
} ?>
</table>
