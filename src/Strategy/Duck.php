<?php

namespace Alwizo\Strategy;


abstract class Duck
{
	public function quack() {
		echo 'Quack...';
	}

	public function swim() {
		echo 'I can swim...';
	}

	public function fly(){
		echo 'I can fly...<br>';
	}

	abstract function display();
}