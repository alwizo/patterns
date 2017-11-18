<?php

namespace Alwizo\Strategy;


class Squeak implements QuackBehavior
{

	public function quack() {
		echo 'Squek...Squeak...';
	}
}