<?php

function integerNumber($number)
{
    try {
        if (gettype($number) === 'integer') {
            echo $number . ' est un entier';
        }else{
            echo $number . " n'est pas un entier ";
        }
    } catch (Exception $ex) {
        echo $number . $ex->getMessage();
    }
}

integerNumber(2.4);
