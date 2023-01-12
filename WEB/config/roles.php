<?php
return [
    /**
        name : string : roleName
        permissions : array : permissionName
        parent_of : array : roleName

        the order in which roles are listed is ignored
        roleNames mentioned in 'parent_of' will inherit the permissions of the current role
     */

        'roles' => [
            [
                'name' => 'restricted',
                'permissions' => [
                    'restricted'
                ],
                'parent_of' => [],
            ],
            [
                'name' => 'klant',
                'permissions' => [
                    'in/uit checken', 'persoonlijk top-up wallet'
                ],
                'parent_of' => [
                    'admin','management', 'chauffeur', 'servicedesk', 'rosterer'
                ],
            ],
            [
                'name' => 'chauffeur',
                'permissions' => [
                    'persoonlijk rooster bekijken', 'persoonlijk rit status wijzigen', 'vervanging vragen'
                ],
                'parent_of' => [
                    'admin'
                ],
            ],
            [
                'name' => 'servicedesk',
                'permissions' => [
                    'klanten beheren', 'globaal top-up wallet'
                ],
                'parent_of' => [
                    'admin', 'management'
                ],
            ],
            [
                'name' => 'toegang-app',
                'permissions' => [
                    'toegang-app'
                ],
                'parent_of' => [
                    'admin', 'management', 'rosterer'
                ],
            ],
            [
                'name' => 'rosterer',
                'permissions' => [
                    'chauffeurs beheren', 'schedules beheren'
                ],
                'parent_of' => [
                    'admin', 'management'
                ],
            ],
            [
                'name' => 'management',
                'permissions' => [
                    'rosterers beheren', 'servicedesk beheren'
                ],
                'parent_of' => [
                    'admin'
                ],
            ],
            [
                'name' => 'admin',
                'permissions' => [
                    'admin'
                ],
                'parent_of' => [],
            ]
        ]
    ];
