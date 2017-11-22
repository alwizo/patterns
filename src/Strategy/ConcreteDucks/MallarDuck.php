<?php

namespace Alwizo\Strategy\ConcreteDucks;

use Alwizo\Strategy\Duck;
use Alwizo\Strategy\ConcreteBehaviors\FlyWithWings;
use Alwizo\Strategy\ConcreteBehaviors\Quack;

class MallarDuck extends Duck
{

	/**
	 * MallarDuck constructor.
	 */
	public function __construct() {
		$this->fly_behavior = new FlyWithWings();
		$this->quack_behavior = new Quack();
	}

	function display() {

		echo 'I\'m mallar duck...<br>';
	}
}