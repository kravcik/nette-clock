<?php

declare(strict_types = 1);

namespace Kravcik\Clock;

use DateTimeImmutable;


class Clock implements ClockInterface
{
	public function now(): DateTimeImmutable
	{
		return new DateTimeImmutable;
	}
}
