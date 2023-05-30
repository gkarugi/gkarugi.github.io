<?php

return [
    'Home' => '/',
    'About Us' => [
        'url' => 'about-us',
        'children' => [
            'Our Team' => 'our-team'
        ],
    ],
    'Our Programs' => [
        'url' => 'programs',
        'children' => [
            'Equipping Individuals' => 'programs/equipping-individuals',
        ],
    ],
    'News' => 'news',
    'Blog' => 'blog',
    'Resources' => [
        'url' => 'resources',
        'children' => [
            'Research, Policies & Reports' => 'resources/research-policies-reports',
            'Webinars' => 'resources/webinars',
            'Podcasts' => 'resources/podcasts',
        ],
    ],
    'Find Help' => [
        'url' => 'resources',
        'children' => [
            'Get screened' => 'resources/research-policies-reports',
        ],
    ],
    'Get Involved' => [
        'url' => 'resources',
        'children' => [
            'Donate' => 'resources/research-policies-reports',
        ],
    ],
];
