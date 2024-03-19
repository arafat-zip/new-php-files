<?php
echo "hello world";
echo PHP_EOL;

function sayHi($name=null){
    if(isset($name)){
        echo $name."says hello world";
    }else{
        echo "the world is buetifull";
    }
}
sayHi("Arafat");