<?php
    $x = 1002;
    $y = 100;
    $z = '100';

    echo "<h1>PHP Comparison Operators</h1>";
    echo "<h1> x = $x and y = $y <br /></h1>";
    echo "<hr color = 'red' size='4px' />";

    echo " x == z : ", var_dump($x == $z) , "<br />"; //$x == $z
    echo " x === z : ", var_dump($x === $z) , "<br />"; //$x === $z //Ok
    echo " x <=> z : ", var_dump($x <=> $z) , "<br />"; //$x <=> $z //Error
    echo " x <=> y : ", var_dump($x <=> $y) , "<br />"; //$x <=> $y
    echo " x > y : ", var_dump($x > $y) , "<br />"; 
    echo " x < y : ", var_dump($x < $y) , "<br />"; 
    echo " x >= y : ", var_dump($x >= $y) , "<br />"; 
    echo " x <= y : ", var_dump($x <= $y) , "<br />"; 
    echo " x >= y : ", var_dump($x >= $y) , "<br />"; 
    echo " x != y : ", var_dump($x != $y) , "<br />"; 
    echo " x !== y : ", var_dump($x !== $z) , "<br />"; 