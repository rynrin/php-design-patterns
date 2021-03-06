<?php
namespace SimpleFactory;

class DoorFactory
{
    public static function makeDoor(float $width, float $height): Door {
        return new WoodenDoor($width, $height);
    }
}
