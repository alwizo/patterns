<?php

namespace Alwizo\Decorator\Beverages;


abstract class Beverage
{

	/**
	 * @return mixed
	 */
	abstract function getDescription();

	/**
	 * All beverages have a cost
	 *
	 * @return mixed
	 */
	abstract function cost();
}