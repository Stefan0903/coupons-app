<?php

return [
    'role_structure' => [
        'admin' => [
            'coupons' => 'c,r,u,d'
        ],
        'zaposleni' => [
            'coupons' => 'r'
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
