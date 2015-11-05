<?php
  $i = 1;
  for(;$i<=100;$i++){
    if($i%3 == 0){
      print "Fizz</br>";
    }else if($i%5 == 0){
      print "Buzz</br>";
    } else{
      print "{$i}</br>";
    }
  }
 ?>
