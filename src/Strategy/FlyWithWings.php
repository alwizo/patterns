<?php

namespace Alwizo\Strategy;


class FlyWithWings implements FlyBehavior
{
	public function fly() {
		echo 'I can fly with wings<br>';
	}
}