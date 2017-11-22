<?php

namespace Alwizo\Decorator\Beverages\ConcreteDecorators;


use Alwizo\Decorator\Beverages\CondimentDecorator;

class Mocha extends CondimentDecorator
{
	public function getDescription() {
		return $this->beverage->getDescription() . ', Mocha';
	}

	public function cost() {
		return $this->beverage->cost() + 1.01;
	}
}