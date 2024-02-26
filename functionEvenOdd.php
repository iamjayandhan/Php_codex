<?php
    function is_even($number){
        if($number%2==0){
            return "Even";
        }
        return "Odd";
    }

    function hypotenuse(int $a,int $b){ //or ($a,$b)
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }
        
    echo is_even(11) ."<br>";
    echo hypotenuse(10,20);

?>