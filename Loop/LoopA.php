<?php 

    $count      = 0;
    $array_even = [];

    while ($count <= 10) 
    {
        
        if ($count % 2 == 0)
        {
            $array_even[] = $count;
        }
        $count++;
    }

    echo 'Even numbers: '.implode("," , $array_even).'<br>';
    echo 'Sum: '.array_sum($array_even);
?>