<?php
$omikuji = rand(1,10);
 if($omikuji == 1){
   echo "<img src='img/大吉.jpg' width=500>";
     echo "<br>";
     echo "今年の運勢は、大吉です！";


 }elseif ($omikuji == 2) {
   echo "<img src='img/中吉.png' width=500>";
     echo "<br>";
     echo "今年の運勢は、中吉です！";
 }
elseif ($omikuji == 3) {
   echo "<img src='img/小吉.jpg' width=500>";
    echo "<br>";
    echo "今年の運勢は、小吉です！";
 }
elseif ($omikuji == 4) {
   echo "<img src='img/吉.jpg' width=500>";
    echo "<br>";
    echo "今年の運勢は、吉です！";
 }
elseif ($omikuji == 5) {
   echo "<img src='img/凶.jpg' width=500>";
    echo "<br>";
    echo "今年の運勢は、凶です！";
 }


?>
