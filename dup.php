<?php
function removedup(array $array1): bool|array{
      $array2 = [];
      $key = [];
      foreach ($array1 as $finalArray){
          if (!isset($key[$finalArray])){
              $array2[] = $finalArray;
              $key [$finalArray] = true;
          }
      }
    return $array2;
}
$array1 = array (1, 2, 3, 4, 5, 3, 2, 5, 7, 1);
$array1 = removedup($array1);
print_r($array1);
?>
