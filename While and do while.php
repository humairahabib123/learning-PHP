<?php

echo "<b><u>WHILE LOOP</b></u><br><br>";

$i = 2;
while ($i <= 20){

  echo "$i<br>";

$i+= 2;
}

echo "<b><u><br> DO WHILE LOOP</b></u><br><br>";

$i=5;
do{
 echo "$i<br>";
 $i+=5;
}
 while($i <= 50);


echo "<b><u><br> NESTED WHILE LOOP</b></u><br><br>";
 $j=7;
 $f=7;
while($f<=70){
   while ($j <= 10) {
     echo "first code<br>";
   $j++;
    }
   echo "the number is $f<br>";
 $f+=7;
}


 ?>
