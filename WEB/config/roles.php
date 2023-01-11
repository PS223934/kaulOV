<?php
return [
    /**
        name : string : roleName
        permissions : array : permissionName
        parent_of : array : roleName

        the order in which roles are listed is ignored
        roleNames mentioned in 'parent_of' will inherit permissions of the current role
     */

        'roles' => [
            [
                'name' => 'klant',
                'permissions' => [
                    'in/uit checken', 'persoonlijk top-up wallet'
                ],
                'parent_of' => [
                    'admin','management', 'chauffeur'
                ],
            ],
            [
                'name' => 'chauffeur',
                'permissions' => [
                    'persoonlijk rooster bekijken', 'persoonlijk rit status wijzigen', 'vervanging vragen'
                ],
                'parent_of' => [
                    'admin', 'management'
                ],
            ],
            [
                'name' => 'management',
                'permissions' => [
                    'globaal rooster administreren', 'chauffeurs administreren', 'globaal top-up wallet'
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
