<?php

namespace Alwizo\Strategy;


use Alwizo\Strategy\Duck;

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