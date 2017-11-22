<?php

namespace Alwizo\Strategy\ConcreteBehaviors;

use Alwizo\Strategy\FlyBehavior;


class FlyWithWings implements FlyBehavior
{
	public function fly() {
		echo 'I can fly with wings<br>';
	}
}