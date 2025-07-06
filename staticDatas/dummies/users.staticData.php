<?php

return [
    [
        'user_id'     => '11111',
        'first_name'  => 'Juan',
        'middle_name' => 'R.',
        'last_name'   => 'Dela Cruz',
        'username'    => 'juandelacruz',
        'password'    => 'zombieSafe99', // will be hashed by the seeder
        'is_admin'    => false,
    ],
    [
        'user_id'     => '22222',
        'first_name'  => 'Admin',
        'middle_name' => '',
        'last_name'   => 'User',
        'username'    => 'admin',
        'password'    => 'admin123',
        'is_admin'    => true,
    ],
];