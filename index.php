<?php
require_once 'vendor/autoload.php';

use Alwizo\Decorator\Monsters\ConcreteMonsters;
use Alwizo\Decorator\Monsters\ConcreteDecorators;

$monster = new ConcreteMonsters\Zombie();
$monster = new ConcreteDecorators\ExtremelySmart($monster);
echo 'My INT is '. $monster->intelligence() . '<br>';
echo $monster->castSpell('fireball');