<?php 

    $array_numbers      = [9863,7127,2020,80,131,55,100];
    $new_array_numbers  = [];
    sort($array_numbers);

    for($count = 0; $count < count($array_numbers); $count++) 
    {
        if ($array_numbers[$count] % 2 != 0)
        {
            $new_array_numbers[] = round($array_numbers[$count], -1);
        }
        else
        {
            $new_array_numbers[] = $array_numbers[$count];
        }
    }

    echo implode(",", $new_array_numbers);

?>