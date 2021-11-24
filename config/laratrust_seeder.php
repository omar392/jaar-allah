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
    
        'super_admin'=>[

            'teams'=>'c,r,u,d',
            'users'=>'c,r,u,d',
            'admins'=>'c,r,u,d',
            'roles'=>'c,r,u,d',
            'blogs'=>'c,r,u,d',
            'faqs'=>'c,r,u,d',
            'customers'=>'c,r,u,d',
            'banners'=>'c,r,u,d',
            'galleries'=>'c,r,u,d',
            'news'=>'c,r,u,d',
            'issues'=>'c,r,u,d',
            'decisions'=>'c,r,u,d',
            'services'=>'c,r,u,d',
            'seos'=>  'r,u',
            'settings' => 'r,u',
            'abouts' => 'r,u',
            'counters' => 'r,u',
            
        ]

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
