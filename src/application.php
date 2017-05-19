<?php

require __DIR__.'vendor/autoload.php';

use Symfony\Component\Console\Application;
use Command\ParseVkCommand;

$application = new Application();

//$application->add(new GenerateAdminCommand());

$application->run();