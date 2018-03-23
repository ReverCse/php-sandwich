<?php

include('Car.php');
include('CarBuilder.php');

use App\Car;
use App\CarBuilder;

/**
 * Building a Car the OLD way requires us to know EVERYTHING
 * about the Car the second we build it. It can also cause
 * some pretty ugly code:
 */

$old_car = new Car;

$old_car->addWheels("4 chrome 16 inch");
$old_car->selectEngineType("v6");
$old_car->addDoors("4 gullwing");
$old_car->selectColor("Blue Metallic");

var_dump($old_car);

/**
 * Using a BUILDER object actually allows us to write cleaner-looking
 * code, and gives us the opportunity to only add attributes as
 * we figure out that we want them.CarBuilder
 *
 * This method is infinitely extensible, because each method returns
 * the updated reference to the Builder object, so we
 * can chain methods cleanly and only use them when we have the
 * right information to call them.
 *
 * This design pattern is generally used to break complex
 * procedures down into managable bites! Not to mention that
 * chained methods just look a whole lot cleaner!
 */

// This could even be a singleton!
$builder = new CarBuilder;

$new_car = $builder->addNumberOfWheels(4)
    ->addWheelColor("chrome")
    ->addEngineType("v")
    ->addWheelSize('20')
    ->addCylinders(6)
    ->addColor("black")
    ->addFinish('metallic')
    ->addNumberOfDoors(4)
    ->addDoorStyle('regular')
    ->manufacture();

    var_dump($new_car);
