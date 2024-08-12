<?php

// define('NAMA', 'Zeeshan Hisyam');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// CONST 
class Goodbye {
    const LEAVING_MESSAGE = "Hello World!";

    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();

echo Goodbye::LEAVING_MESSAGE;