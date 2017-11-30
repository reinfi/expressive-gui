<?php

/** @var \Zend\Expressive\Application $app */

$app->injectRoutesFromConfig((new \ExpressiveGui\ConfigProvider())());
