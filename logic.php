<?php
__DIR__. require 'data.php';
__DIR__. require 'citydata.php';
function getTeamCount($array) {
    return count($array);
  }

// Snyggare kod för att bygga table, men den blir fulare. Jag klarar inte att  få till det så att den formaterar sig snyggt, därav använder jag den ej!
 /*
 
__DIR__. require 'data.php';?>
<table border="solid black 2px">
<?php
   
foreach ($teams as $key => $value) {?>
   <td><strong><?= $key;?></strong></td><?php
    foreach ($value as $sub_key => $sub_val) {?>
        <tr><td><?php if ($sub_val === null) { 
            echo "N/A";} else {echo $sub_key." = ". $sub_val;}?></td></tr><?php           
    }
}?>
</table>
?>
<table border="1">
    <thead>
        <tr>
            <th>Team</th>
            <th>League</th>
            <th>Last Time Champions</th>
            <th>City</th>
            <th>Nickname</th>
            <th>URL</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($teams as $team => $data): ?>
            <tr>
                <td><?= $team; ?></td>
                <td><?= $data['league']; ?></td>
                <td>
                  <?php  
                    if ($data['last-time-champions'] !== null){
                      echo $data['last-time-champions'];
                    } else {
                      echo 'N/A';
                    } ?></td>
                <td><?= $data['city']; ?></td>
                <td>
                    <?php
                    if (isset($data['nickname'])) {
                        echo $data['nickname'];
                    } else {
                        echo 'N/A';
                    }
                    ?>
                </td>
                <td><a href="<?php echo $data['url']; ?>">Website</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
*/