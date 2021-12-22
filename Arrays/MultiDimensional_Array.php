<?php
// Class for Programs of Multi Dimensional Array
class MultiDimensional_Array
{
    /**
     * Function for Displaying the Elements of the array
     * Passing 'array' as parameters
     */
    function display($array)
    {
        print_r($array);
    }

    /**
     * Function for Displaying the Elements of the array
     * Passing 'array' as parameters
     */
    function display1($array)
    {
        var_dump($array);
    }

    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' number of row, 'm' number of Columns and 'array' as parameters
     */
    function display2($n, $m, $array)
    {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                echo $array[$i][$j] . " ";
            }
            echo "\n";
        }
    }

    /**
     * Function For type 1 Multi Dimensional Array and
     * calling the display function init.
     */
    function array1()
    {
        $array = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
        $obj = new MultiDimensional_Array();
        $obj->display($array);
    }

    /**
     * Function For type 2 Multi Dimensional Array and
     * calling the display function init.
     */
    function array2()
    {
        $array = array(
            array("First Name" => "Arafath", "Last Name" => "Baig", "Ph.number" => "7986331895"),
            array("First Name" => "Karimulla", "Last Name" => "Baig", "Ph.number" => "9492083682"),
            array("First Name" => "Sarfaraz", "Last Name" => "Baig", "Ph.number" => "9440755022")
        );
        $obj = new MultiDimensional_Array();
        $obj->display1($array);
        echo "Arafath Baig's Phone Number is: " . $array[0]["Ph.number"] . "\n";
    }

    /**
     * Function For user input Multi Dimensional Array and
     * calling the display function init.
     */
    function array3()
    {
        $n = readline('Enter number of Rows: ');
        $m = readline('Enter number of Columns: ');
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $array[$i][$j] = readline('Enter an element for Row: ' . $i . ', Column: ' . $j . ' => ');
            }
        }
        $obj = new MultiDimensional_Array();
        $obj->display2($n, $m, $array);
    }
}
$obj = new MultiDimensional_Array();
$obj->array1();
$obj->array2();
$obj->array3();
