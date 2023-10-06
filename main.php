<!-- The Main content of the main page. An loop that builds all the cards thats displays on the main page -->
<main>
    <div class="main-container">
        <h1>Welcome!</h1>
        <h3>This are all the teams we are gonna showcase today:</h3>
        <div class="card-container"><?php
            foreach ($teams as $team => $data){ ?>           
                    <?php if ($team == 'Arsenal'){?>
                    <a href="<?=$data['url']?>"><div class="<?='card-item Arsenal'?>">
                    <p><?=$team?></p>
                    <img class="image" src="<?='assets/Arsenal_FC.svg.png'?>"/>
                    </div></a><?php ;}
                    elseif ($team == 'Aston Villa'){?>
                    <a href="<?=$data['url']?>"><div class="<?='card-item Aston-villa'?>">
                    <p><?=$team?></p>
                    <img class="image" src="<?='assets/astonvilla.png'?>"/>
                    </div></a><?php ;}
                    elseif ($team == 'Manchester City'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Man-city'?>">
                        <p><?=$team?></p>
                        <img class="image" src="<?='assets/Manchester_City_FC_badge.svg.png'?>"/>
                        </div></a><?php ;}
                    elseif ($team == 'Newcastle'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Newcastle'?>">
                        <p><?=$team?></p>
                        <img class="image" src="<?='assets/Newcastle_United_Logo.svg.png'?>"/>
                        </div></a><?php ;}
                    elseif ($team == 'Chelsea'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Chelsea'?>">
                        <p><?=$team?></p>
                        <img class="image" src="<?='assets/Chelsea_FC.svg.png'?>"/>
                        </div></a><?php ;}
                    elseif ($team == 'Watford'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Watford'?>">
                        <p><?=$team?></p>
                        <img class="image" src="<?='assets/watford.png'?>"/>
                        </div></a><?php ;}
                    elseif ($team == 'Brighton'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Watford'?>">
                        <p><?= $team?></p>
                        <img class="brighton-image" src="<?='assets/brighton.png'?>"/>
                        </div></a><?php ;}
                }?>
        </div>
    </div>
</main>