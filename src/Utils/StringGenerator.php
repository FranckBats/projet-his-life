<?php

namespace App\Utils;

class StringGenerator {
    
    // Method used many times in a lot of controllers. Best practices to create a service class for it.
    public static function generateRandomString($length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $maxLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $maxLength - 1)];
        }
        return $randomString;
    }
}