<?php


declare(strict_types = 1);

namespace Kravcik\Clock;

use DateTimeImmutable;


class Freeze implements ClockInterface
{
	public function __construct
	(
		private readonly string $datetime
	)
	{
	}


	public function now(): DateTimeImmutable
	{
		return new DateTimeImmutable($this->datetime);
	}
}
