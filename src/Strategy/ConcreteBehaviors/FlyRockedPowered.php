<?php

namespace Alwizo\Strategy\ConcreteBehaviors;

use Alwizo\Strategy\FlyBehavior;


class FlyRockedPowered implements FlyBehavior
{

	public function fly() {
		echo 'Now I\'m flying with a rocket!!!<br>';
	}
}