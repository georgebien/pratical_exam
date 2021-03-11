<?php 

    $count      = 0;
    $array_odd = [];
    do 
    {
        if ($count % 2 != 0)
        {
            $array_odd[] = $count;
        }
        $count++;
    } while ($count <= 10);

    echo 'Odd numbers: '.implode("," , $array_odd).'<br>';
?>