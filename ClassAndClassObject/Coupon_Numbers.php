<?php
// Class for generating Coupon Numbers
class Coupon_Number
{
	/*
	* Function to generate the random numbers and
	* storing the Unique coupons into the array
	* Passing the parameters of Number of Coupons and the Array
	* Returns the count of Randoms generated
	*/
	function coupons($n, $distinctArray)
	{
		$couponCount = 0;
		$randomCount = 0;
		$j = 0;
		while (($couponCount <= $n) && ($j < $n)) {
			$flag = 0;
			$randomCoupon = rand(1, 10);
			//echo "Random is:" . $randomCoupon . "\n";
			$randomCount = $randomCount + 1;
			for ($i = 0; $i < $n; $i++) {
				if ($distinctArray[$i] == $randomCoupon) {
					$flag = $flag + 1;
					break;
				} else {
					$flag = $flag;
				}
			}
			if ($flag == 0) {
				$distinctArray[$j] = $randomCoupon;
				echo "Added Coupon is: " . $distinctArray[$j] . "\n";
				$j++;
				$couponCount += 1;
				//echo "Coupon Count is : " . $couponCount . "\n";
			}
		}
		return $randomCount;
	}
}
$n = readline('Enter Number of Coupons Needed: ');
$distinctArray = new SplFixedArray($n);
$obj = new Coupon_Number();
echo "No.of Randoms Generated: " . $obj->coupons($n, $distinctArray) . "\n";
echo "Distinct Coupons: \n";
for ($k = 0; $k < $n; $k++) {
	echo $distinctArray[$k] . " ";
}
