<?php

$mode = 1; // 0 = simple mode; 1 = multiple

$minions = array("minions","Dave","Jerry","Kevin","Phil","Stuart","Tim");

echo "<h2>Minions show!</h2>";

$id = 0;
$image = $minions[0];

if ($mode == 1) {
  $id = rand (1,6);
  $image = $minions[$id];
}

echo "<img src=img/".$image.".png alt=minion_name><br>";
echo "<br>REMOTE ADDR: " . $_SERVER['REMOTE_ADDR'];
echo "<br>SERVER ADDR: " . $_SERVER['SERVER_ADDR'];

?>
