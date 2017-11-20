<?php

namespace Alwizo\Decorator\Monsters\ConcreteDecorators;


use Alwizo\Decorator\Monsters\ModifiedMonster;

class ExtremelySmart extends ModifiedMonster
{
	public function intelligence() {
		return parent::intelligence() * 2;
	}

	public function castSpell($spell){
		return "casts the {$spell} spell";
	}
}