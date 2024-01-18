<?php

namespace App\Service;

class StringManipulationService{

    function removeHifem(string $str): string{
        $str = preg_replace("-", " ", $str);
        return $str;
    }
}

