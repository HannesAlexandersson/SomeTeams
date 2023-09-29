<?php __DIR__. require 'head.php';?>
    <?php __DIR__. require 'header.php';?>
    <main>
        <div class="container">
            <div class="table-container">
                <div class="table-item">
                    <h1>The Teams:</h1>
                </div>
                <div class="table-item">
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
            </div>            
        </div>
    </main>
<?php __DIR__. require 'navbar.php';?>
<?php __DIR__.require 'footer.php';?>
