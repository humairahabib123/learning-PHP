<?php

echo "<b><u><br>BREAK STATEMENT</b></u><br><br>";
 for($i=5 ; $i<50; $i+=3){
if ($i==50){
     break;
   }
   echo "i learnt break statement<br>";
 }

echo "<b><u><br>CONTINUE STATEMENT</b></u><br><br>";
for ($x=0; $x<10; $x++){
  if ($x==5){
    continue;
  }
  echo "continue statement breaks the loop: $x <br>";
}
echo "<b><u><br>GOTO STATEMENT</b></u><br><br>";

for($y=1; $y<10; $y++){
  echo "$y<br>";
  if ($y==7)
  goto xyz;

}
xyz:
echo "goto is use for the purpose of jump from statement<br>";

 ?>
