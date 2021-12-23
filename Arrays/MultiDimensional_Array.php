<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Programs of Multi Dimensional Array
 */
class MultiDimensionalArray
{
    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' number of row, 'm' number of Columns and 'array' as parameters
     */
    function show($n, $m, $array)
    {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                echo $array[$i][$j] . " ";
            }
            echo "\n";
        }
    }

    /**
     * Function For user input Multi Dimensional Array and
     * calling the show function init.
     */
    function input()
    {
        $n = readline('Enter number of Rows: ');
        $m = readline('Enter number of Columns: ');
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $array[$i][$j] = readline('Enter an element for Row: ' . $i . ', Column: ' . $j . ' => ');
            }
        }
        $this->show($n, $m, $array);
    }
}
$obj = new MultiDimensionalArray();
$obj->input();
