<?php
    $n=10; 
    echo " The sum is ". sum($n) ;
    function sum($a)
    {
        if ( $a <= 0 )
        return 0; 
        else
        return ($a + sum($a-1));
    }
    sum($n);
?>