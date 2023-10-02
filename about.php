<?php __DIR__. require'head.php';
__DIR__. require'header.php';
__dir__. require'logic.php';?>
<main>
    <div class="container">
        <div class="about">
            <img src="assets/loremIpsumbaby.png" style="border-radius: 16px; width: 30%;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt diam non purus tempus lacinia. In a odio ullamcorper massa eleifend vehicula at nec nunc. Fusce quis est eu mi laoreet pellentesque sit amet nec metus. Vestibulum lobortis feugiat rutrum. Sed porttitor, purus sit amet ornare dictum, magna massa semper quam, scelerisque mattis magna felis ut tortor. Vestibulum tincidunt id leo vel tincidunt. Ut vehicula ligula ut eros lobortis, vel ultrices eros posuere. Aliquam pretium eros nec accumsan aliquam. Nulla lorem elit, facilisis a urna ac, mollis venenatis dolor. Praesent ante quam, commodo eu ultrices ac, lobortis non felis. Cras vel cursus urna. Morbi dignissim tempus laoreet. Proin maximus velit et orci ultricies accumsan.</p>
            <span class="about-hidden">Dont forget that there are <?= getTeamCount($teams) ?> teams in Hans array! <a href="cityValues.php">Here</a> are some data from that array only for you! </span>
        </div>
    </div>
</main>
<?php __DIR__. require 'navbar.php';?>
<?php __DIR__. require 'footer.php';?>