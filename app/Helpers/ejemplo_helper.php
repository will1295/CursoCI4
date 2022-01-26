<?php

    function suma($num1,$num2){
        return $num1+$num2;
    }

    
    function resta($num1,$num2){
        return $num1-$num2;
    }

    
    function multiplicacion($num1,$num2){
        return $num1*$num2;
    }

    
    function divsion($num1,$num2){
        if($num2=0){
            $mensaje = "No se puede dividir entre cero";
            return mensaje;
        }
        else
        return $num1/$num2;
    }

?>