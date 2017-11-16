<?php
function reverse_int($numbers)
{
    $reverse = 0;
    while ($numbers > 0)
      {
        $reverse = $reverse * 10;
        $reverse = $reverse + $numbers % 10;
        $numbers = (int)($numbers/10);
      }
     return $reverse;
}   
print_r(reverse_int(4,3,5,2,6,2));

?>
