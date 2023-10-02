<?php __DIR__ . require 'head.php'; ?>
<?php __DIR__ . require 'header.php'; ?>
<main>
    <div class="container">
        <div class="table-container">
            <div class="table-item table-header">
                <h1>The Teams:</h1>
            </div>
            <div class="table-item table-data">
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
                        <?php foreach ($teams as $team => $data) : ?>
                            <tr>
                                <td><?= $team; ?></td>
                                <td><?= $data['league']; ?></td>
                                <td>
                                    <?php
                                    if ($data['last-time-champions'] !== null) {
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
            </div>
        </div>
    </div>
</main>
<?php __DIR__ . require 'navbar.php'; ?>
<?php __DIR__ . require 'footer.php'; ?>
<?php




/*Funkar men blir inte bra med 'nickname'
 <?php
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

*/


/*funkar, men inte 'nickname'
<div class="container">
            <div class="table-container">
                <div class="table-item table-header">
                    <h1>The Teams:</h1>
                </div>
                <div class="table-item table-data">
                    <table>
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
                        <tr><th>NICKNAME</th><?php
                            foreach ( $teams as $key => $value):?>
                            <td><?php if ($data['last-time-champions'] !== null){
                                echo $data['last-time-champions']; } 
                                else {
                                echo 'N/A'; $value['nickname']?>"><?= $key?></td>
                            <?php endforeach;?>
                        </tr>
                        <tr><th>WEBSITE</th><?php
                            foreach ( $teams as $key => $value):?>
                            <td><a href="<?= $value['url']?>"><?= $key?></a></td>
                            <?php endforeach;?>
                        </tr>
                    </table>
                </div>
            </div>            
        </div>

*/
?>