<?php

require __DIR__ . '/../application/helpers/Sum.php';

use PHPUnit\Framework\TestCase;

final class SumTest extends TestCase
{
	public function testPositiveNumbers()
	{
		$s = new Sum();
		$this->assertEquals(18, $s->getSum(7, 11));
		$this->assertEquals(1220, $s->getSum(920, 300));
	}

	public function testMultipleNumbers()
	{
		$s = new Sum();
		$this->assertEquals(0, $s->getSum());
		$this->assertEquals(3, $s->getSum(3));
		$this->assertEquals(16, $s->getSum(7, 9));
		$this->assertEquals(10, $s->getSum(6, 1, 3));
		$this->assertEquals(346, $s->getSum(300, 24, 4, 18));
	}

	public function testNegativeNumbers()
	{
		$s = new Sum();
		$this->assertEquals(-2, $s->getSum(5, -7));
		$this->assertEquals(1, $s->getSum(5, -7, 3));
	}
}
