<?php

require __DIR__ . '/../application/helpers/Email.php';

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
	public function testCanBeCreatedFromValidEmailAddress(): void
	{
		$this->assertInstanceOf(
			Email::class,
			Email::fromString('user@example.com')
		);
	}

	public function testCannotBeCreatedFromInvalidEmailAddress(): void
	{
		$this->expectException(InvalidArgumentException::class);
		Email::fromString('invalid');
	}

	public function testCanBeUsedAsString(): void
	{
		$this->assertEquals(
			'user@example.com',
			Email::fromString('user@example.com')
		);
	}
}
