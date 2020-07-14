<?php

    // version one
    function minOperation($n){
        $binary = (string)decbin($n);
        $binLength = strlen($binary);
        $newBinary = $binary;

        for($i = 1; $i < $binLength; $i++){
            $newBinary[$i] = (int)$newBinary[$i-1] ^ (int)$binary[$i];
        }

        return bindec($newBinary);
    }

    //version 2
    function minOperation2($n){
        $binary = $n;

        for($i = 1; $i < strlen($n); $i++){
            $binary[$i] = (int)$binary[$i] ^ (int)$n[$i]; 
        }

        return $binary;
    }

    // version one output
    echo minOperation(13);

    //version two code driver
    echo bindec(minOperation2(decbin(15)));


?>