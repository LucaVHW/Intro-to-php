<?php

$arr = [
	["tv-show" => "Naruto", "rating" => 4],
	["tv-show" => "Firefly", "rating" => 5],
	["tv-show" => "Big bang theory", "rating" => 4],
	["tv-show" => "Family Guy", "rating" => 5],
  ["tv-show" => "HunterxHunter", "rating" => 5],
  ["tv-show" => "Fairy tail", "rating" => 5],
  ["tv-show" => "Deadman wonderland", "rating" => 4],
  ["tv-show" => "Gabriel dropout", "rating" => 4]
];

foreach ($arr as $key => $item) {
  foreach($item as $key => $name){

      echo $name."<br>";

  }
}

 ?>
