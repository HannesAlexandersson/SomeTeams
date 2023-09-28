<?php
__DIR__. require 'data.php';
?>
<!-- build an html table out of the data in the array -->
<table>
    <th>
        <tr>
            <th>Teams</th>
            <?php foreach ($teams as $key => $value) :?>
                <th><a href="<?=$value['url']?>"><?= $key?></a></th>
            <?php endforeach?>
        </tr>
    </th>
    <tr>
        <td>League</td>
        <?php foreach ($teams as $key => $value) :?>
            <td><?= $value['league']?></td> 
        <?php endforeach?>             
    </tr>
    <tr>
        <td>Last Time Champions</td>
        <?php foreach ($teams as $key => $value) :?>
            <td><?php if ($value['last-time-champions'] === null){
                echo "N/A";} else {echo $value['last-time-champions'];} ?></td> 
        <?php endforeach?>             
    </tr>
    <tr>
        <td>City</td>
        <?php foreach ($teams as $key => $value) :?>
            <td><?= $value['city']?></td> 
        <?php endforeach?>             
    </tr>
</table>


