<table border="1">
    <tr>
        <th style="padding: 5px; align-content: center">Sender</th>
        <th style="padding: 5px; align-content: center">Mesaj</th>
    </tr>
    
    <?php require_once 'functii/sql_functions.php';
    $vm=  preia_mesaje();
    if ($vm=!NULL){
        foreach ($vm as $m){  ?>
            <tr>
                <td style="padding: 5px; align-content: center" ><?php print $m['sender']; ?></td>
                <td style="padding: 5px; align-content: center"><?php print $m['message']; ?></td>
            </tr>
            
            
       <?php }
    } else print "Nu aveti mesaje!"
    ?>
    
    
    
    
</table>