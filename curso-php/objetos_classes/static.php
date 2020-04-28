<?php
class Math {
    public static $pi = 3.14; 

    public static function apresentar() {
        return self::$pi;
    }
}

echo Math::$pi;
echo Math::apresentar(); 