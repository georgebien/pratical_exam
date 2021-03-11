<?php 

    $array_colors       = ["red","blue","black","red","blue","red","blue","gold"];
    $array_count_values = array_count_values($array_colors);
    $array_no_repeat    = [];

    arsort ($array_count_values);
    foreach ($array_count_values as $key => $value) 
    {
        if ($value == 1)
        {
            $array_no_repeat[] = $key;
        }
    }

    echo "Not repetitive item: ". implode(", ",$array_no_repeat);
?>