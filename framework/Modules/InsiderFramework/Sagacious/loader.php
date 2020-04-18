<?php

/**
 * File that loads sagacious settings and classes
 */

require_once 'config_sagacious.php';

\Modules\InsiderFramework\Core\KernelSpace::setVariable(
    array(
        'componentsBag' => new \Modules\InsiderFramework\Sagacious\Lib\SgsBags\SgsComponentsBag()
    ),
    'sagacious'
);

\Modules\InsiderFramework\Core\KernelSpace::setVariable(
    array(
        'viewsBag' => new \Modules\InsiderFramework\Sagacious\Lib\SgsBags\SgsViewsBag()
    ),
    'sagacious'
);
