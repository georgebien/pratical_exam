<?php 

    function checkFibonacci($start,$end) {

        $return = '';
        for ($count = $start; $count <= $end; $count++) 
        { 
            $positive_result = (5 * pow($count,2)) + 4;
            $negative_result = (5 * pow($count,2)) - 4;
                
            if (sqrt($positive_result) - floor(sqrt($positive_result)) == 0 || sqrt($negative_result) - floor(sqrt($negative_result)) == 0)
            {
                $return .= $count. ' is a Fibonacci Number<br>';
            }
            else
            {
                $return .= $count. ' is not a Fibonacci Number<br>';
            }
        }

        return $return;
    }

    
    $start  = 1;
    $end    = 10;
    echo checkFibonacci($start,$end);
?>