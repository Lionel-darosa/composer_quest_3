<?php


require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hi my name is Bessie');

$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');

echo $bessie;