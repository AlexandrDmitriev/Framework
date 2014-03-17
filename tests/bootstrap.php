<?php

error_reporting(E_ALL);

include '../CoreInterfaces/IAutoLoader.php';
include '../Autoloader/AutoLoader.php';

use AutoLoader\AutoLoader;

$autoLoader = new AutoLoader(array(
    'ServiceLocator' => '{root}/ServiceLocator',
    'CoreInterfaces' => '{root}/CoreInterfaces',
    'Framework' => '{root}'
));

$autoLoader->addAliases(array('root'=>'..'));
