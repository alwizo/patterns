<?php

namespace Alwizo\Decorator\Monsters\ConcreteMonsters;


use Alwizo\Decorator\Monsters\Monster;

class Zombie extends Monster
{
	public function strength() {
		return 3;
	}
}