<?php

namespace Alwizo\Strategy;


class MuteQuack implements QuackBehavior
{

	public function quack() {
		echo 'I can\'t quack...<br>';
	}
}