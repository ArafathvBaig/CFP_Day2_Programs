<?php
// Class for Programs on Associative Array
class Associative_Array
{
    /**
     * Function for Displaying the Elements of the array
     * Passing 'array' as parameters
     */
    function display($n, $names)
    {
        foreach ($names as $key => $value)
            echo $key . "=" . $value . "\n";
    }

    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' length of array and 'array' as parameters
     */
    function display1($n, $names)
    {
        $keys = array_keys($names);
        for ($i = 0; $i < count($keys); ++$i) {
            echo $keys[$i] . ' ' . $names[$keys[$i]] . "\n";
        }
    }

    /**
     * Function For type 1 Associative array and
     * calling the display function init.
     */
    function array1()
    {
        $names = array("Arafath" => 24, "Afriha" => 22, "Karimulla" => 55, "Rehana" => 49, "Ajeemun" => 75, "Ismail" => 80);
        $n = count($names);
        //print_r($names);
        $obj = new Associative_Array();
        $obj->display($n, $names);
    }

    /**
     * Function For type 2 Associative array and
     * calling the display function init.
     */
    function array2()
    {
        $names["Arafath"] = "24";
        $names["Afriha"] = "22";
        $names["Karimulla"] = "55";
        $names["Rehana"] = "49";
        $names["Ajeemun"] = "75";
        $names["Ismail"] = "80";
        $n = count($names);
        $obj = new Associative_Array();
        $obj->display1($n, $names);
    }
}
$obj = new Associative_Array();
$obj->array1();
$obj->array2();
