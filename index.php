<?php
require_once 'vendor/autoload.php';

use Alwizo\Strategy\Duck;

$mallar_duck = new \Alwizo\Strategy\ConcreteDucks\MallarDuck();
$mallar_duck->display();
$mallar_duck->performFly();
$mallar_duck->performQuack();
$mallar_duck->setFlyBehavior(new \Alwizo\Strategy\ConcreteBehaviors\FlyRockedPowered());
$mallar_duck->performFly();
echo '<br>';

$redhead_duck = new \Alwizo\Strategy\RedheadDuck();
$redhead_duck->display();
$redhead_duck->performFly();
$redhead_duck->performQuack();