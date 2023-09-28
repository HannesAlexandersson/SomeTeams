<?php
__DIR__. require 'data.php';
?>
<!-- build an html table out of the data in the array -->
<table border="2px solid black">
    <thead>
        <tr><th>TEAMS</th><?php
            foreach ( $teams as $key => $value):?>
            <th><?= $key?></th>
            <?php endforeach;?>
        </tr>
    </thead>
    <tr><th>LEAGUE</th><?php
        foreach ( $teams as $key => $value):?>
        <td><?= $value['league']?></td>
        <?php endforeach;?>
    </tr>
    <tr><th>Last time champion</th><?php
        foreach ( $teams as $key => $value):?>
        <td><?php if ($value['last-time-champions'] !== null) echo $value['last-time-champions']; else echo "N/A"?></td>
        <?php endforeach;?>
    </tr>
    <tr><tr><th>ORIGIN</th><?php
        foreach ( $teams as $key => $value):?>
        <td><?= $value['city']?></td>
        <?php endforeach;?>
    </tr>
    <tr><th>WEBSITE</th><?php
        foreach ( $teams as $key => $value):?>
        <td><a href="<?= $value['url']?>"><?= $value['url']?></a></td>
        <?php endforeach;?>
    </tr>
</table>
