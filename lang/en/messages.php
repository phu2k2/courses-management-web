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
            'update_image' => 'Update image successful'
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
            'create' => 'Added to cart successfully!',
            'delete' => 'successfully removed the course from the shopping cart',
        ],
        'error' => [
            'create' => 'Failed to add to cart!',
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
