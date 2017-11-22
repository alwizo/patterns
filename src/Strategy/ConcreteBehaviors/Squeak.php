<?php

namespace Alwizo\Strategy\ConcreteBehaviors;

use Alwizo\Strategy\QuackBehavior;

class Squeak implements QuackBehavior
{

	public function quack() {
		echo 'Squek...Squeak...';
	}
}