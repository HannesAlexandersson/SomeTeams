<?php
__DIR__. require 'data.php';
$i = 0;
$citys = [];//ny tom array som fylls med alla lagens städer ifrån teamsarrayen
foreach ($teams as $city){
    $citys[] = $city['city'];
}
$city_array_sorted = array_unique($citys);//Ny tom array som fylls med enbart unika värden från citysarrayen
