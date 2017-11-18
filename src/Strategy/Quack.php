<?php

namespace Alwizo\Strategy;


class Quack implements QuackBehavior
{

	public function quack() {
		echo 'Quack...Quack..<br>';
	}
}