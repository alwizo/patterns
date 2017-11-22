<?php

namespace Alwizo\Decorator\Beverages\ConcreteBeverages;


use Alwizo\Decorator\Beverages\Beverage;

class Expresso extends Beverage
{
	public function getDescription() {
		return 'This is Expresso';
	}

	public function cost() {
		return 3;
	}
}