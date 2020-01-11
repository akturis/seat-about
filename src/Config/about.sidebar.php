<?php

return [
    'about' => [
        'permission'    => 'about.view',
        'name'          => 'About',
        'icon'          => 'fa-info',
        'route_segment' => 'about',
        'route'         => 'about.view',
    ],
    'about_settings' => [
        'permission'    => 'about.settings',
        'name'          => 'Edit About',
        'icon'          => 'fa-edit',
        'route_segment' => 'about',
        'route'         => 'about.settings',
    ],
];