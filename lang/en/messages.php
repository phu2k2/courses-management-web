<?php

return [
    'user' => [
        'success' => [
            'create' => 'Register account was successful',
        ],
        'error' => [
            'create_cart' => 'Course is already in cart!',
            'login' => 'Login error, please check your email or password'
        ]
    ],
    'profile' => [
        'success' => [
            'update' => 'Update or create profile was successful',
        ],
        'error' => [
            'update' => 'Update profile was fail'
        ],
    ],
    'cart' => [
        'success' => [
            'create' => 'Added to cart successfully!',
            'delete' => 'successfully removed the course from the shopping cart',
        ],
        'error' => [
            'create' => 'Failed to add to cart!',
            'delete' => 'Removing course from cart failed'
        ]
    ],
    'review' => [
        'success' => [
            'create' => 'Add review successfull!',
        ],
        'error' => [
            'create' => 'Failed to add review!'
        ],
    ]
];
