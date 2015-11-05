<?php
  $i = 1;
  //test
  for(;$i<=100;$i++){
    if($i%15 == 0){
      print "FizzBuzz</br>";
    }else if($i%3 == 0){
      print "Fizz</br>";
    }else if($i%5 == 0){
      print "Buzz</br>";
    } else if($i%7 == 0){
      print "Git</br>";
    }else{
      print "{$i}</br>";
    }
  }
 ?>
