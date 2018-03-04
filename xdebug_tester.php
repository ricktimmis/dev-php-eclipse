<?php

/*
* Xdebug Test Script
* Author: Rick Timmis
*
* Simple double loop script for testing xdebug
* call this from browser or cli with your IDE
* debugger enabled, and you should be able to step
* into or over the loops. and interrogate the values being 
* applied to various variables
*/

$dictionary = array(
0 => "Apple",
1 => "Pear",
2 => "Orange",
3 => "Lemon",
4 => "Lime",
5 => "Banana",
);

$outer_counter = 0;
$inner_counter = 1;

while ( $outer_counter < 5){
   while ( $inner_counter < 100){
       $plural = "s";
       if ($inner_counter == 1){
           $plural = "";
       }
       $out_string = "There are ".$inner_counter." Juicy ".$dictionary[$outer_counter].$plural." hanging on the tree";
       echo $out_string."\n";
       $inner_counter++;
    }
    $inner_counter = 1;
    $outer_counter++;
}

echo "Xdebug Testing Script Complete \n";

?>
