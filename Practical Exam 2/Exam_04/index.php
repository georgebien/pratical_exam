<?php 

    function getDateDifference ($start, $end) {
        $start_date = strtotime($start);
        $end_date   = strtotime($end);
        $difference = abs($end_date - $start_date);

        $years  = floor($difference / (365 * 60 * 60 * 24));
        $months = floor(($difference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days   = floor(($difference - ($years * 365 * 60 * 60 * 24) - ($months * 30 * 60 * 60 * 24)) / (60 * 60 * 24));

        return ($years > 1) ? $years .' years, ' . (($months > 1) ? $months .' months, ' : $months .' month, ')  . (($days > 1) ? $days .' days' : $days .' day') : $years .' year, ' . (($months > 1) ? $months .' months, ' : $months .' month, ')  . (($days > 1) ? $days .' days' : $days .' day');

    }

    $start  = '2019-05-31';
    $end    = '2018-04-05';
    echo getDateDifference($start,$end);
?>