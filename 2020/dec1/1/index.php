<?php
  $file = fopen("input.txt","r");
  $numbers_array = [];
  while(! feof($file))  {
    $result = fgets($file);
    $numbers_array[] = trim($result);
    }
  fclose($file);

  function look_for_sum($numbers_array) {
    $numbers_array_lenght = count($numbers_array);
    for ($x = 0; $x <= $numbers_array_lenght; $x++) {
      for ($y = 0; $y <= $numbers_array_lenght; $y++) {
        if(isset($numbers_array[$x]) && isset($numbers_array[$y])) {
          $outer_number = $numbers_array[$x];
          $inner_number = $numbers_array[$y];
          if (($inner_number + $outer_number) == 2020) {
            return $inner_number * $outer_number;
          }
        }
      } 
    }
  }

print look_for_sum($numbers_array);