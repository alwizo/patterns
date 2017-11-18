<?php
require_once 'vendor/autoload.php';

use Alwizo\Strategy\Duck;

$mallar_duck = new \Alwizo\Strategy\MallarDuck();
$mallar_duck->display();
$mallar_duck->performFly();
$mallar_duck->performQuack();
echo '<br>';

$redhead_duck = new \Alwizo\Strategy\RedheadDuck();
$redhead_duck->display();
$redhead_duck->performFly();
$redhead_duck->performQuack();