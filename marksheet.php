<?php

$a=$_GET["nam"];
echo "<b> Name: </b> $a <br>";

$b=$_GET["class"];
echo "<b> Class: </b> $b <br>";

$c=$_GET["eng"];
echo "<b> English Marks: </b> $c <br>";

$d=$_GET["urdu"];
echo "<b> Urdu Marks: </b> $d <br>";

$f=$_GET["math"];
echo "<b> Maths Marks: </b> $f <br>";

$g=$_GET["isl"];
echo " <b>Islamiat Marks: </b> $g <br>";

$t=$_GET["com"];
echo "<b> Computer Marks: </b> $t <br>";

$tot= $c + $d + $f + $g + $t;
echo "<b> Total marks = </b> $tot <br>" ;
$per = $tot/500*100;
echo "<b> Percentage = </b> $per <br><br><Br>";






 ?>
