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
        for ($z = 0; $z <= $numbers_array_lenght; $z++) {
        if(isset($numbers_array[$x]) && isset($numbers_array[$y]) && isset($numbers_array[$z])) {
          $first_number = $numbers_array[$x];
          $second_number = $numbers_array[$y];
          $third_number = $numbers_array[$z];
          if (($first_number + $second_number + $third_number) == 2020) {
            return $first_number * $second_number * $third_number;
          }
        }
        }
      } 
    }
  }

print look_for_sum($numbers_array);