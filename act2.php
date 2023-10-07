<?php
    $N=50;
    
    function getSqrt($N){
        for ($i=1; $i <= $N; $i++) { 
            $numSqrt[$i]=sqrt($i);
            echo "The square root of $i"." is $numSqrt[$i]";
            echo "<br>";
        }
        //return $numSqrt;
    }
    getSqrt($N)
    //print_r(getSqrt($N));
?>