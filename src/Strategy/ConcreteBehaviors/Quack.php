<?php

namespace Alwizo\Strategy;namespace Alwizo\Strategy\ConcreteBehaviors;

use Alwizo\Strategy\QuackBehavior;

class Quack implements QuackBehavior
{

	public function quack() {
		echo 'Quack...Quack..<br>';
	}
}