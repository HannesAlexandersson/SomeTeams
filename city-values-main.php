<!-- The main content of the "city-value" sub page -->
<main>
    <div class="container">
        <div class="city-container">
            <div class="Info-box">
            <p>In the array there are 7 teams from 5 different citys</p>
            <p>The different citys are:</p>
            </div>
            <div class="city-box"><?php //Prints all the values from the array into an own card
            foreach ($city_array_sorted as $city){?>
                <div class="city-card"><p><?= $city;?></p></div>
                <?php
            }?>
            </div>
            <p><u>And:</u></p>
            <?php        //Prints the teams name and city
            foreach ($teams as $key => $value) {?>
                <p class="city-item"><?= $citys[$i] . " is the city of " . $key ?></p><br><?php $i++ ;
                }
            ?>
        </div>
    </div>
</main>