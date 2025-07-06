<?php

return [
    [
        'transaction_id' => 'f0f0f0f0-f0f0-f0f0-f0f0-f0f0f0f0f0f0',
        'user_id'         => '11111111-1111-1111-1111-111111111111', // Juan Dela Cruz
        'order_id'        => 'abababab-abab-abab-abab-abababababab', // replace with actual order UUID for Juan
        'transaction_date'=> '2025-07-06 10:10:00',
        'currency'        => 'Zombie Crystal',
        'amount_paid'     => 100.00,
        'total_amount'    => 99.98,
        'status'          => 'completed',
    ],
    [
        'transaction_id' => 'beefbeef-beef-beef-beef-beefbeefbeef',
        'user_id'         => '11111111-1111-1111-1111-111111111111', // Juan Dela Cruz
        'order_id'        => 'cdcdcdcd-cdcd-cdcd-cdcd-cdcdcdcdcdcd', // replace with another order UUID for Juan
        'transaction_date'=> '2025-07-05 14:40:00',
        'currency'        => 'Zombie Crystal',
        'amount_paid'     => 50.00,
        'total_amount'    => 49.99,
        'status'          => 'completed',
    ],
    [
        'transaction_id' => '12341234-1234-1234-1234-123412341234',
        'user_id'         => '22222222-2222-2222-2222-222222222222', // Admin User
        'order_id'        => 'a1a1a1a1-a1a1-a1a1-a1a1-a1a1a1a1a1a1', // replace with actual order UUID for Admin
        'transaction_date'=> '2025-07-04 09:10:00',
        'currency'        => 'Zombie Crystal',
        'amount_paid'     => 150.00,
        'total_amount'    => 149.95,
        'status'          => 'completed',
    ],
];