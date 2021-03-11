<?php 

    $content = '<?php
    //This is a comment
    
    echo "This is a test page!";
    echo "Exam number two!";
    
    //This is the end of a comment
    ';
    $file_open = fopen($_SERVER['DOCUMENT_ROOT']. "/Practical Exam 1/Practical Exam 2/Exam_02 /hello_there.php","wb");
    fwrite($file_open,$content);
    fclose($file_open);
?>