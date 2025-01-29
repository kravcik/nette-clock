<?php

declare(strict_types = 1);

namespace Kravcik\Clock;

use Nette\DI\CompilerExtension;

class Extension extends CompilerExtension
{
	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();

		$config = $this->loadFromFile(__DIR__ . '/config.neon');
		$this->compiler->loadDefinitionsFromConfig($config['services']);
	}
}
