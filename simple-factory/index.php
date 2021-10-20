<?php
namespace SimpleFactory;

include "../vendor/autoload.php";

$door = DoorFactory::makeDoor(100, 200);

echo "Width: {$door->getWidth()}\n";
echo "Height: {$door->getHeight()}";

// Make another door of 50x100
$anotherDoor = DoorFactory::makeDoor(50, 100);

/**
 * When to use
 * When creating an object is not just a few assignments and involves some logic, it makes sense to put it in a dedicated
 * factory instead of repeating the same code everywhere
 */