<?php

namespace Alwizo\Strategy;


abstract class Duck
{
	public $fly_behavior; //instance of type FlyBehavior
	public $quack_behavior; //instance of type QuackBehavior

	public function performQuack() {
		$this->quack_behavior->quack();
	}

	public function performFly() {
		$this->fly_behavior->fly();
	}

	public function swim(){
		echo 'All ducks float, even docoys';
	}

	abstract function display();
}