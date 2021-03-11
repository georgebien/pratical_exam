<?php 
   
    $counter        = 10;
    $array_numbers  = [];

    for ($count = 0; $count <= $counter ; $count++) 
    { 
        if ($count == 0 || $count == 1)
        {
            $array_numbers[] = $count;
        }
        else
        {
           $array_numbers[] = array_sum(array_slice($array_numbers, -2));
        }
        
    }
    echo 'Fibonacci Sequence: ' . implode(" ",$array_numbers);
?>