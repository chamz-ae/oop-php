<?php

// class ContohStatic {
//     public static $num = 1;
    
//     // Method STATIC
//     public static function halo() {
//         return " Halo " . self::$num++ . "X";
//     }

// }

// echo ContohStatic::$num;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    // Before static
    // public $num = 1;

    // After static
    public static $num = 1;

    public function halo() {
        // Before static
        // return "Halo " . $this->num . "X <br>";

        // After static
        return "Halo " . self::$num++ . "X <br>";
    }

}

$obj = New Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";
$obj2 = New Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();