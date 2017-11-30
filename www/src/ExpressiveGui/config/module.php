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
            'path'            => '/',
            'middleware'      => \ExpressiveGui\Action\SiteAction::class,
            'allowed_methods' => [ 'GET' ],
        ],
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