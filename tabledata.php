<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="table-style.css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet" type="text/css" />
    <?php __DIR__. require 'data.php'; ?>
    </head>
    <body>
        <div class="header-container">
            <div class="header-item">
                <h1>Some Teams!</h1>
            </div>
            <div class="header-item">
                <img src="assets/blowitt.svg" style="width: 20%;"/>
            </div>
        </div>
        <div class="main-container">
            <div class="table-container">
                <div class="table-item">
                    <p>The Teams:</p>
                </div>
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
                    <tr><th>WEBSITE</th><?php
                        foreach ( $teams as $key => $value):?>
                        <td><a href="<?= $value['url']?>"><?= $key?></a></td>
                        <?php endforeach;?>
                    </tr>
                </table>
            </div>
            <div class="nav-container">
                <nav class="nav-item">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="tabledata.php">Table<img class="table-icon" src="assets/table.svg"/></a>
                </nav>
            </div>
        </div>
    </body>
    <?php __DIR__.require 'footer.php';?>
</html>
