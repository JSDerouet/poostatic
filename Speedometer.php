<?php

class Speedometer
{
    public const MILES = 0.621371;
    public const KM = 1.60934;
    public static function convertKmToMiles($km){
        return $km*self::MILES;
    }
    public static function convertMilesToKm($miles){
        return $miles*self::KM;
    }
}