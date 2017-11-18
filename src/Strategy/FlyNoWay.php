<?php

namespace Alwizo\Strategy;


class FlyNoWay implements FlyBehavior
{
	public function fly() {
		echo 'I can\'t fly...<br>';
	}

}