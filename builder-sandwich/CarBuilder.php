<?php

namespace App;

use App\Car;

class CarBuilder
{
    // Generally, instead of keeping track of strings,
    // these would be a Wheel object, but we're keeping
    // the example pretty simple here
    protected $number_of_wheels;
    protected $color_of_wheels;
    protected $size_of_wheels;
    
    protected $engine_type;
    protected $number_of_cylinders;

    protected $number_of_doors;
    protected $style_of_doors;

    protected $color;
    protected $finish;

    public function __construct()
    {
    }
    
    /**
     * Assembles the Car object based on the parameters selected
     * from the Builder methods
     *
     * @return Car
     */
    public function manufacture()
    {
        $car = new Car;

        $car->addWheels($this->number_of_wheels . " " . $this->color_of_wheels . " " . $this->size_of_wheels . " inch");

        $car->selectEngineType($this->engine_type . $this->number_of_cylinders);
        
        $car->addDoors($this->number_of_doors . " " . $this->style_of_doors);

        $car->selectColor($this->color . " " . $this->finish);
        
        return $car;
    }
    
    /**
     * Adds the number of wheels to the builder object
     *
     * @param integer $number
     * @return CarBuilder
     */
    public function addNumberOfWheels(int $number)
    {
        $this->number_of_wheels = $number;

        return $this;
    }
    
    /**
     * Adds the color of the wheels to the builder object
     *
     * @param string $color
     * @return CarBuilder
     */
    public function addWheelColor(string $color)
    {
        $this->color_of_wheels = $color;

        return $this;
    }

    /**
     * Adds the size of the wheels to the builder object
     *
     * @param integer $size
     * @return void
     */
    public function addWheelSize(int $size)
    {
        $this->size_of_wheels = $size;

        return $this;
    }
    
    /**
     * Adds the type of engine to the builder object
     *
     * @param string $type
     * @return CarBuilder
     */
    public function addEngineType(string $type)
    {
        $this->engine_type = $type;

        return $this;
    }
    
    /**
     * Adds the number of cylinders to the builder object
     *
     * @param integer $number
     * @return CarBuilder
     */
    public function addCylinders(int $number)
    {
        $this->number_of_cylinders = $number;

        return $this;
    }
    
    /**
     * Adds the number of doors to the builder object
     *
     * @param integer $number
     * @return CarBuilder
     */
    public function addNumberOfDoors(int $number)
    {
        $this->number_of_doors = $number;

        return $this;
    }

    /**
     * Adds the door style to the builder object
     *
     * @param string $style
     * @return CarBuilder
     */
    public function addDoorStyle(string $style)
    {
        $this->style_of_doors = $style;

        return $this;
    }
    
    /**
     * Adds the car color to the builder object
     *
     * @param string $color
     * @return CarBuilder
     */
    public function addColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Adds the finish of the car to the builder object
     *
     * @param string $finish
     * @return CarBuilder
     */
    public function addFinish(string $finish)
    {
        $this->finish = $finish;

        return $this;
    }
}
