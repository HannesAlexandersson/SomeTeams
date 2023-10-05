<!-- The Main content of the main page. An loop that builds all the cards thats displays on the main page -->
<main>
    <div class="main-container">
        <div class="card-container"><?php
            foreach ($teams as $team => $data){ ?>           
                    <?php if ($team == 'Arsenal'){?>
                    <a href="<?=$data['url']?>"><div class="<?='card-item Arsenal'?>">
                    <p><?='Arsenal Football Club'?></p>
                    <img class="<?='image'?>" src="<?='assets/Arsenal_FC.svg.png'?>"/>
                    </div></a><?php ;}
                    else if ($team == 'Aston Villa'){?>
                    <a href="<?=$data['url']?>"><div class="<?='card-item Aston-villa'?>">
                    <p><?='Aston Villa Football Club'?></p>
                    <img class="<?='image'?>" src="<?='assets/astonvilla.png'?>"/>
                    </div></a><?php ;}
                    else if ($team == 'Manchester City'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Man-city'?>">
                        <p><?='Manchester City Football Club'?></p>
                        <img class="<?='image'?>" src="<?='assets/Manchester_City_FC_badge.svg.png'?>"/>
                        </div></a><?php ;}
                    else if ($team == 'Newcastle'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Newcastle'?>">
                        <p><?='Newcastle United Football Club'?></p>
                        <img class="<?='image'?>" src="<?='assets/Newcastle_United_Logo.svg.png'?>"/>
                        </div></a><?php ;}
                    else if ($team == 'Chelsea'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Chelsea'?>">
                        <p><?='Chelsea Football Club'?></p>
                        <img class="<?='image'?>" src="<?='assets/Chelsea_FC.svg.png'?>"/>
                        </div></a><?php ;}
                    else if ($team == 'Watford'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Watford'?>">
                        <p><?='Watford Football Club'?></p>
                        <img class="<?='image'?>" src="<?='assets/watford.png'?>"/>
                        </div></a><?php ;}
                    else if ($team == 'Brighton'){?>
                        <a href="<?=$data['url']?>"><div class="<?='card-item Watford'?>">
                        <p><?='Brighton & Hove Albion Football Club'?></p>
                        <img class="<?='brighton-image'?>" src="<?='assets/brighton.png'?>"/>
                        </div></a><?php ;}
                }?>
        </div>
    </div>
</main>