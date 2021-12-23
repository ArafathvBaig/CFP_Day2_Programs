<?php
// Class for Programs on Indexed Array
class IndexedArray
{
    public $indexedArray = array();
    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' length of array and 'array' as parameters
     */
    function show($n, $indexedArray)
    {
        for ($i = 0; $i < $n; $i++) {
            echo $indexedArray[$i]." ";
        }
    }

    /**
     * Function For user input indexed array and
     * calling the show function init.
     */
    function input()
    {
        $n = readline('Enter the Size of Array: ');
        for ($i = 0; $i < $n; $i++) {
            $this->indexedArray[$i] = readline('Enter the Value: ');
        }
        $this->show($n, $this->indexedArray);
    }
}
$obj = new IndexedArray();
$obj->input();
