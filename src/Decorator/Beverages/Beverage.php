<?php

namespace Alwizo\Decorator\Beverages;


abstract class Beverage
{
	/**
	 * All beverages have a description
	 *
	 * @var
	 */
	private $description;

	/**
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * All beverages have a cost
	 *
	 * @return mixed
	 */
	abstract function cost();
}