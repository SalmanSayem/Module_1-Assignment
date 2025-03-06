<?php

echo "Enter a number: ";

$number = (int) readline();

if ($number < 0) {
    echo "The number is Nagetive";
}elseif ($number > 0) {
    echo "The number is Postive";
}else{
    echo "The number is zero";
}