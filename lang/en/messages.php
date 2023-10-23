<?php

return [
    'user' => [
        'success' => [
            'create' => 'Register account was successful',
            'create_cart' => 'Added to cart successfully!',
            'create_comment' => 'Add comment successfull'
        ],
        'error' => [
            'create_cart' => 'Course is already in cart!',
            'create_comment' => 'Add comment error!',
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
    'comment' => [
        'success' => [
            'delete' => 'Delete comment was successful',
        ],
        'error' => [
            'delete' => 'Delete comment was failed',
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
