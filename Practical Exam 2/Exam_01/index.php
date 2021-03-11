<?php 

    function checkPalindrome($string )
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

        $reverse_word = implode("",$array_reverse);

        if ($string_no_space == $reverse_word) 
        {
            return 'This is a Palindrome.';
        }
        else
        {
            return 'This is not a Palindrome.';
        }
    }
        
    $string = 'test';
    echo checkPalindrome($string);

?>