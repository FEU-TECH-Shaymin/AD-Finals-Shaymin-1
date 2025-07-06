<?php

return [
    [
        'transaction_id' => '2025000',
        'user_id'         => '11111', // Juan Dela Cruz
        'order_id'        => 'aaaa-1234', // replace with actual order UUID for Juan
        'transaction_date'=> '2025-07-06 10:10:00',
        'currency'        => 'Zombie Crystal',
        'amount_paid'     => 100.00,
        'total_amount'    => 99.98,
        'status'          => 'completed',
    ],
    [
        'transaction_id' => '2025001',
        'user_id'         => '11111', // Juan Dela Cruz
        'order_id'        => 'aaaa-5678', // replace with another order UUID for Juan
        'transaction_date'=> '2025-07-05 14:40:00',
        'currency'        => 'Zombie Crystal',
        'amount_paid'     => 50.00,
        'total_amount'    => 49.99,
        'status'          => 'completed',
    ],
    [
        'transaction_id' => '2025002',
        'user_id'         => '22222', // Admin User
        'order_id'        => 'bbbb-1234', // replace with actual order UUID for Admin
        'transaction_date'=> '2025-07-04 09:10:00',
        'currency'        => 'Zombie Crystal',
        'amount_paid'     => 150.00,
        'total_amount'    => 149.95,
        'status'          => 'completed',
    ],
];