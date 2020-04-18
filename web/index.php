<?php

// Silence always comes with a price

require_once(
    '..' . DIRECTORY_SEPARATOR .
    'framework' . DIRECTORY_SEPARATOR .
    'Modules' . DIRECTORY_SEPARATOR .
    'InsiderFramework' . DIRECTORY_SEPARATOR .
    'Core/System.php'
);

\Modules\InsiderFramework\Core\System::initializeFramework();
\Modules\InsiderFramework\Core\System::checkCpuUsage();
\Modules\InsiderFramework\Core\RoutingSystem\Request::requestRoute();
