<?php 

    function reverseWord($string )
    {
        $string_no_space    = str_replace(' ', '', $string);
        $split_string       = str_split($string_no_space);
        $array_reverse      = [];
        $counter            = 1;

        for ($count = 0; $count < count($split_string) ; $count++)
        { 
            $array_reverse[] = $split_string[count($split_string) - $counter];
            $counter++;
        }

        return implode("",$array_reverse);
    }
        
    $string = 'car';
    echo reverseWord($string);

?>