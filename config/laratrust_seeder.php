<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'permissions' => 'c,r,u,d',
            'kabupatens' => 'c,r,u,d',
            'kecamatans' => 'c,r,u,d',
            'desas' => 'c,r,u,d',
            'tps' => 'c,r,u,d',
            'paslons' => 'c,r,u,d',
            'paslon_details' => 'c,r,u,d',
            'suaras' => 'c,r,u,d',
            'suara_details' => 'c,r,u,d'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            // 'roles' => 'c,r,u,d',
            // 'permissions' => 'c,r,u,d',
            'kabupatens' => 'c,r,u,d',
            'kecamatans' => 'c,r,u,d',
            'desas' => 'c,r,u,d',
            'tps' => 'c,r,u,d',            
            'paslons' => 'c,r,u,d',
            'paslon_details' => 'c,r,u,d',
            'suaras' => 'r',
            'suara_details' => 'r'
        ],
        'petugas-tps-desa' => [
            // 'users' => 'c,r,u,d',
            // 'roles' => 'c,r,u,d',
            // 'permissions' => 'c,r,u,d',
            // 'kabupatens' => 'c,r,u,d',
            // 'kecamatans' => 'c,r,u,d',
            // 'desas' => 'c,r,u,d',
            // 'tps' => 'c,r,u,d',            
            'paslons' => 'r',
            'paslon_details' => 'r',
            'suaras' => 'c,r,u,d',
            'suara_details' => 'c,r,u,d'
        ],
        'petugas-tps-kecamatan' => [
            // 'users' => 'c,r,u,d',
            // 'roles' => 'c,r,u,d',
            // 'permissions' => 'c,r,u,d',
            // 'kabupatens' => 'c,r,u,d',
            // 'kecamatans' => 'c,r,u,d',
            // 'desas' => 'c,r,u,d',
            // 'tps' => 'c,r,u,d',
            // 'desas' => 'c,r,u,d',
            'paslons' => 'r',
            'paslon_details' => 'r',
            'suaras' => 'r',
            'suara_details' => 'r'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ],

    'create_users' => true
];
