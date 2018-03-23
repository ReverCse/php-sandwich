<?php

namespace App;

class Car
{
    protected $wheels;
    protected $engine;
    protected $doors;
    protected $color;

    public function __construct()
    {
        $this->wheels = null;
        $this->engine = null;
        $this->doors = null;
        $this->color = null;
    }

    /**
     * Adds wheels to the car
     *
     * String Pattern: "[number] [color] [size] inch"
     *
     * Constraints: Cars must have 3, 4, or 8 wheels
     * 				Cars must have chrome, black, or white wheels
     *
     * @param string $wheels
     * @return void
     */
    public function addWheels(string $wheels)
    {
        $this->wheels = $wheels;
    }
    
    /**
     * Selects the engine type for the car
     *
     * String Pattern: "[engine type] [number of cylinders]"
     *
     * Constraints: Cars must have v-type or i-type engines
     * 				Cars must have 4, 6, 8, or 10 cylinders
     *
     * @param string $type
     * @return void
     */
    public function selectEngineType(string $type)
    {
        $this->engine = $type;
    }

    /**
     * Adds doors to the car
     *
     * String Pattern: "[number] [style]"
     *
     * Constraints: Cars must have 2, 3, 4, or 5 doors
     * 				Cars must have regular or gullwing doors
     *
     * @param string $doors
     * @return void
     */
    public function addDoors(string $doors)
    {
        $this->doors = $doors;
    }
    
    /**
     * Selects the color of the car
     *
     * String Pattern: "[color] [finish]"
     *
     * Constraints: Cars must have a color
     * 				Cars must have a metallic, chrome, or normal finish
     *
     * @param string $color
     * @return void
     */
    public function selectColor(string $color)
    {
        $this->color = $color;
    }
}
