<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Programs on Associative Array
 */
class Associative_Array
{
    public $name = array();
    /**
     * Function for Displaying the Elements of the array
     * Passing 'array' as parameters
     */
    function show($n, $names)
    {
        foreach ($names as $key => $value)
            echo $key . " = " . $value . "\n";
    }

    /**
     * Function For type 1 Associative array and
     * calling the show function init.
     */
    function input()
    {
        $n = readline('Enter the Size of Array: ');
        for ($i = 0; $i < $n; $i++) {
            $key = readline('Enter the Key: ');
            $this->name[$key] = readline('Enter the Value: ');
        }
        $this->show($n, $this->name);
    }
}
$obj = new Associative_Array();
$obj->input();
