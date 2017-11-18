<?php

namespace Alwizo\Strategy;


abstract class Duck
{
	public $fly_behavior; //instance of type FlyBehavior
	public $quack_behavior; //instance of type QuackBehavior

	/**
	 * @param mixed $fly_behavior
	 */
	public function setFlyBehavior( FlyBehavior $fly_behavior ) {
		$this->fly_behavior = $fly_behavior;
	}

	/**
	 * @param mixed $quack_behavior
	 */
	public function setQuackBehavior( QuackBehavior $quack_behavior ) {
		$this->quack_behavior = $quack_behavior;
	}

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