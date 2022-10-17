<?php

namespace CowSay;

// require_once '/home/jerome/wcs/exercices/composer-quest-3/vendor/autoload.php';
require_once 'vendor/autoload.php';

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;

