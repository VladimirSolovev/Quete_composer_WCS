<?php

require '../vendor/autoload.php';
require '../src/Wcs/Hello.php';

use \App\Wcs\Hello;
use \HelloWorld\SayHello;

//$helloYou = new Hello();

echo Hello::talk();
echo SayHello::world();