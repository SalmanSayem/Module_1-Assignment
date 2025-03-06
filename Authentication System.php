<?php

define("USERNAME","salman");
define("PASSWORD","salman123");

echo "Enter your username: ";
$username = readline();

echo "Enter your password: ";
$password = readline();

if (empty($username) || empty($password)){
    echo "Username or password is blank";
}elseif($username === USERNAME && $password === PASSWORD){
    echo "Login successfull";
}else{
    echo "invalid username/password ";
}