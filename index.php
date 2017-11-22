<?php
require_once 'vendor/autoload.php';

use Alwizo\Decorator\Monsters\ConcreteMonsters;
use Alwizo\Decorator\Monsters\ConcreteDecorators;

$monster = new ConcreteMonsters\Zombie();
$monster = new ConcreteDecorators\ExtremelySmart($monster);
echo 'My INT is '. $monster->intelligence() . '<br>';
echo $monster->castSpell('fireball') . '<br>';

$dark_roast = new \Alwizo\Decorator\Beverages\ConcreteBeverages\HouseBlend();
echo $dark_roast->getDescription() . '<br>';
echo 'My cost is $' . $dark_roast->cost() . '<br>';

$dark_roast_mocha = new \Alwizo\Decorator\Beverages\ConcreteDecorators\Mocha($dark_roast);
echo $dark_roast_mocha->getDescription().'<br>' . 'My cost is $' . $dark_roast_mocha->cost() . '<br>';