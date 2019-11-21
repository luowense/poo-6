<?php


class Speedometer
{
    const CONVERSION_INDICATOR = 1.609344;

    public static function convertKmToMiles($km)
    {
        $miles = $km / self::CONVERSION_INDICATOR;
        return $miles;
    }
}