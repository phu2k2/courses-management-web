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
    'review' => [
        'success' => [
            'create' => 'Add review successfull!',
        ],
        'error' => [
            'create' => 'Failed to add review!'
        ],
    ],
    'checkout' => [
        'error' => [
            'save' => 'Please choose at least one course'
        ]
    ],
    'order' => [
        'error' => [
            'create_order' => 'The course has been purchased'
        ]
    ]
];
