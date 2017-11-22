<?php

namespace Alwizo\Strategy\ConcreteBehaviors;

use Alwizo\Strategy\QuackBehavior;

class MuteQuack implements QuackBehavior
{

	public function quack() {
		echo 'I can\'t quack...<br>';
	}
}