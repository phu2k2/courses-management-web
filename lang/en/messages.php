<?php

return [
    'user' => [
        'success' => [
            'create' => 'Register account was successful',
            'create_cart' => 'Added to cart successfully!',
            'create_review' => 'Add review successfull!'
        ],
        'error' => [
            'create_cart' => 'Failed to add to cart!',
            'create_review' => 'Failed to add review!',
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
            'delete' => 'successfully removed the course from the shopping cart',
        ],
        'error' => [
            'delete' => 'Removing course from cart failed'
        ]
    ]
];
