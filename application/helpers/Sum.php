<?php

class Sum
{
	/**
	 * This function will add N numbers and return the result.
	 *
	 * Given n arguments, this function will return the sum.
	 *
	 * @return int
	 */
	public function getSum()
	{
		$args = func_get_args();
		$sum = 0;
		if (empty($args)) {
			return $sum;
		}
		foreach ($args as $arg) {
			$sum += $arg;
		}
		return $sum;
	}
}
