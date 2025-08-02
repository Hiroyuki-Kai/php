<?php 
function triangleArea($bottom, $height) {
    echo $bottom * $height / 2 ;
}
function squareArea($bottom, $height) {
    echo $bottom * $height ;
}
function trapezoidArea($top, $bottom, $height) {
    echo ($top + $bottom) * $height / 2 ;
}


triangleArea(6, 12) . "\n";
squareArea(6, 12) . "\n";
trapezoidArea(6, 12, 12) . "\n";