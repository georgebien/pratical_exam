<?php 

    $array  = ["Marvin", "Marco","Marvin", "Marco","Marvin","Christian"];
    $array_count_values = array_count_values($array);

    if(count(array_unique(array_values($array_count_values))) < count(array_values($array_count_values)))
    {
        asort ($array_count_values);
        $array_keys     = array_keys($array_count_values);
        echo 'Tie values<br>';        
        echo implode(", ", $array_keys);
    }
    else
    {
        arsort ($array_count_values);
        $key       = key($array_count_values);
        echo $key.' has the most number of occurence';
    }

?>