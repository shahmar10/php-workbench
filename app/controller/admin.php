<?php

if(!route(1)){
    $route[1] = 'index';
}

if(!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

$menus = [
    'index' => [
        'title' => 'Ana səhifə',
        'icon' => 'tachometer'
    ],
    'users' => [
        'title' => 'İstifadəçilər',
        'icon' => 'user',
        'submenu' => [
            'users' => 'Istifadəçilər siyahısı',
            'add-user' => 'İstifadəçi yarat'
        ]
    ],
    'setting' => [
        'title' => 'Tənzimləmələr',
        'icon' => 'cog'
    ]
];

require admin_controller(route(1));