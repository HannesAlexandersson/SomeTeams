<?php
__DIR__. require 'data.php';
__DIR__. require 'citydata.php';
function getTeamCount($array) {
    return count($array);
  }

// Snyggare kod för att bygga table, men den blir fulare. Jag klarar inte att  få till det så att den formaterar sig snyggt, därav använder jag den ej!
 /*
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