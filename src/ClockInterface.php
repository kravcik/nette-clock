<?php

declare(strict_types = 1);

namespace Kravcik\Clock;

use DateTimeImmutable;


interface ClockInterface
{
	public function now(): DateTimeImmutable;
}
