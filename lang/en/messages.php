<?php

return [
    'user' => [
        'success' => [
            'create' => 'Register account was successful',
            'create_cart' => 'Added to cart successfully!'
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
            'delete' => 'successfully removed the course from the shopping cart',
        ],
        'error' => [
            'delete' => 'Removing course from cart failed'
        ]
    ],
    'password' => [
        'success' => [
            'forgot_password' => 'A reset link has been sent !',
            'reset_password' => 'Reset Password Successfully!'
        ],
        'error' => [
            'forgot_password' => 'Already sent the link to your email !',
            'reset_password' => 'Error token !'
        ]
    ]
];
