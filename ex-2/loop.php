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
    if ($name == "Naruto") {
      echo '<a href="https://naruto.fandom.com/nl/wiki/Hoofdpagina">'.$name.'</a>'.'<br>';
    } elseif ($name == "Firefly") {
      echo '<a href="https://www.imdb.com/title/tt0379786/">'.$name.'</a>'.'<br>';
    } elseif ($name == "Big bang theory") {
      echo '<a href="https://en.wikipedia.org/wiki/The_Big_Bang_Theory">'.$name.'</a>'.'<br>';
    } elseif ($name == "Family Guy") {
      echo '<a href="https://nl.wikipedia.org/wiki/Family_Guy">'.$name.'</a>'.'<br>';
    } elseif ($name == "HunterxHunter") {
      echo '<a href="https://hunterxhunter.fandom.com/wiki/Hunterpedia">'.$name.'</a>'.'<br>';
    } elseif ($name == "Fairy tail") {
      echo '<a href="https://fairytail.fandom.com/wiki/Main_Page">'.$name.'</a>'.'<br>';
    } elseif ($name == "Deadman wonderland") {
      echo '<a href="https://deadmanwonderland.fandom.com/wiki/Deadman_Wonderland_Wiki">'.$name.'</a>'.'<br>';
    } elseif ($name == "Gabriel dropout") {
      echo '<a href="https://gabdro.fandom.com/wiki/Gabdro_Wikia">'.$name.'</a>'.'<br>';
    }

  }
}

 ?>
