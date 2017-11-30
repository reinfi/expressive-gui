<?php

return [
    'dependencies' => [
        'factories' => [
            \ExpressiveGui\Action\SiteAction::class => \ExpressiveGui\Action\Factory\SiteActionFactory::class,
        ],
    ],
    'routes'       => [
        [
            'name'            => 'expressive-gui',
            'path'            => '/expressive-gui',
            'middleware'      => \ExpressiveGui\Action\SiteAction::class,
            'allowed_methods' => [ 'GET' ],
        ],
    ],
    'templates'    => [
        'paths' => [
            'expressive-gui' => [ __DIR__ . '/../templates/expressive-gui' ],
        ],
    ],
];