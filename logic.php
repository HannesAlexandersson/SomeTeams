<!-- A logic file, where I collect my logic like functions and variables etc other pages can call on these functions and variable if they so need -->
<?php
function getTeamCount($array) {
    return count($array);
  };
  $citys = [];//ny tom array som fylls med alla lagens städer ifrån teamsarrayen
foreach ($teams as $city){
    $citys[] = $city['city'];
}
$city_array_sorted = array_unique($citys);//Ny tom array som fylls med enbart unika värden från citysarrayen
