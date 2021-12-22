<?php
// Class for Programs on Indexed Array
class Indexed_Array
{
    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' length of array and 'array' as parameters
     */
    function display($n, $names)
    {
        for ($i = 0; $i < $n; $i++) {
            echo "\n" . $names[$i];
        }
    }

    /**
     * Function For type 1 indexed array and
     * calling the display function init.
     */
    function array1()
    {
        $names = array("Arafath", "Afriha", "Karimulla", "Rehana", "Ajeemun", "Ismail");
        $n = count($names);
        //print_r($names);
        $obj = new Indexed_Array();
        $obj->display($n, $names);
    }

    /**
     * Function For type 2 indexed array and
     * calling the display function init.
     */
    function array2()
    {
        $names[0] = "Arafath";
        $names[1] = "Afriha";
        $names[2] = "Karimulla";
        $names[3] = "Rehana";
        $names[4] = "Ajeemun";
        $names[5] = "Ismail";
        $n = count($names);
        $obj = new Indexed_Array();
        $obj->display($n, $names);
    }

    /**
     * Function For user input indexed array and
     * calling the display function init.
     */
    function array3()
    {
        $names[0] = readline('Enter Value for Inder 0: ');
        $names[1] = readline('Enter Value for Inder 1: ');
        $names[2] = readline('Enter Value for Inder 2: ');
        $names[3] = readline('Enter Value for Inder 3: ');
        $names[4] = readline('Enter Value for Inder 4: ');
        $names[5] = readline('Enter Value for Inder 5: ');
        $n = count($names);
        $obj = new Indexed_Array();
        $obj->display($n, $names);
    }
}
$obj = new Indexed_Array();
$obj->array1();
$obj->array2();
$obj->array3();
