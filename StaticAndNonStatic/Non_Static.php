<?php
class Non_Static_Program
{
    // Class for a Static Program
    public $num = 3;

    /**
     * Non-Static Function to check the length of the name
     * Passing the 'name' as parameter and Accessing Non-Static variable
     * Returns a string
     */
    public function sizeCheck($name)
    {

        if (strlen($name) >= $this->num) {
            return "True";
        } else {
            return "False";
        }
    }
}
// Object to access the Non-Static function
$obj = new Non_Static_Program();
$name = readline('Enter the Name: ');
$check = $obj->sizeCheck($name);
echo $check;
