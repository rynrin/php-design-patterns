<?php

use FactoryMethod\DevelopmentManager;
use FactoryMethod\MarketingManager;

include "../vendor/autoload.php";

$devManager = new DevelopmentManager();
$devManager->takeInterviewer();

$marketingManger = new MarketingManager();
$marketingManger->takeInterviewer();
