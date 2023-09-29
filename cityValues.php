<?php __DIR__ . require 'data.php';
__DIR__ . require 'head.php';
__DIR__ . require 'header.php';
__DIR__ . require 'citydata.php'; ?>
<main>
    <div class="container">
        <div class="city-container">
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