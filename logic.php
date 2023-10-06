<!-- A logic file, where I collect my logic like functions and variables etc other pages can call on these functions and variable if they so need -->
<?php
function getTeamCount($array) {
    return count($array);
  };
  $citys = [];// empty array that fills up with the citys from $teams
foreach ($teams as $city){
    $citys[] = $city['city'];
}
$city_array_sorted = array_unique($citys);//array that fills with only the unique values from the cityarray
