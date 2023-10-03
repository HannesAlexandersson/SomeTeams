<?php __DIR__ . require 'data.php';
__DIR__ . require 'head.php';
__DIR__ . require 'header.php';
__DIR__ . require 'citydata.php'; ?>
<main>
    <div class="container">
        <div class="city-container">
            <div class="Info-box">
            <p>In the array there are 7 teams from 5 different citys</p>
            <p>The different citys are:</p>
            </div>
            <div class="city-box"><?php
            foreach ($city_array_sorted as $city){?>
                <p><?= $city;?></p><br>
                <?php
            }?>
            </div>
            <p><u>And:</u></p>
            <?php        
            foreach ($teams as $key => $value) {?>
                <p class="city-item"><?= $citys[$i] . " is the city of " . $key ?></p><br><?php $i++ ;
                }
            ?>
        </div>
    </div>
</main>
<?php __DIR__. require 'navbar.php';?>            
<?php __DIR__ . require 'footer.php'; ?>