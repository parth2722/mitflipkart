
<?php

return [
    'roles' => [
        'admin' => [
            'type' => 1,
            'description' => 'Admin role',
            'ruleName' => null,
            'children' => ['product','update'],
        ],
        'user' => [
            'type' => 1,
            'description' => 'Regular user role',
            'ruleName' => null,
            'children' => [],
        ],
        
    ],
    'permissions' => [
        'product' => [
            'description' => 'view product',
        ],
        'update' => [
            'description' => 'Update an existing product',
        ],
    ]
];