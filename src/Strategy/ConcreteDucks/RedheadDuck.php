<?php

namespace Alwizo\Strategy;

use Alwizo\Strategy\ConcreteBehaviors\FlyNoWay;
use Alwizo\Strategy\ConcreteBehaviors\MuteQuack;

class RedheadDuck extends Duck
{
	/**
	 * RedheadDuck constructor.
	 */
	public function __construct() {
		$this->fly_behavior = new FlyNoWay();
		$this->quack_behavior = new MuteQuack();
	}

	function display() {
		echo 'I\'am redhead duck...<br>';
	}
}