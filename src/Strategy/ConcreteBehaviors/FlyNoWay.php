<?php

namespace Alwizo\Strategy\ConcreteBehaviors;

use Alwizo\Strategy\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
	public function fly() {
		echo 'I can\'t fly...<br>';
	}

}