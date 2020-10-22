<?php

return [
    'role_structure' => [
        'Super_admin' => [
            'categories' => 'c,r,u,d',
            'news' => 'c,r,u,d',
            'galleries' => 'c,r,u,d',
            'videos' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'settings' => 'r,u',
            'mails' => 'c,r,d',
            'pages' => 'r,u,c,d',
        ],

        'admin' => [
            'categories' => 'c,r,u,d',
            'news' => 'c,r,u,d',
            'roles' => 'r',
            'settings' => 'r,u',
            'mails' => 'c,r,u,d',
            'pages' => 'r,u,c,d',
            ],

    ],


    'permission_structure' => [

    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
