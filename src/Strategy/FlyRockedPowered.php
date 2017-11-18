<?php

namespace Alwizo\Strategy;


class FlyRockedPowered implements FlyBehavior
{

	public function fly() {
		echo 'Now I\'m flying with a rocket!!!<br>';
	}
}