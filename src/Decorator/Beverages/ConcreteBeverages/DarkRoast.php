<?php

namespace Alwizo\Decorator\Beverages\ConcreteBeverages;


use Alwizo\Decorator\Beverages\Beverage;

class DarkRoast extends Beverage
{
	public function cost() {
		return 2;
	}

	public function getDescription() {
		return 'This is DarkRoast';
	}
}