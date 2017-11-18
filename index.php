<?php
require_once 'vendor/autoload.php';

use Alwizo\Strategy\Duck;

$mallar_duck = new \Alwizo\Strategy\MallarDuck();
$mallar_duck->display();

$redhead_duck = new \Alwizo\Strategy\RedheadDuck();
$redhead_duck->display();