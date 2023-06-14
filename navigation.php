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
        'url' => 'programs/about-our-programs',
        'children' => [
            'Equipping Individuals' => 'programs/equipping-individuals',
            'Strengthening schools' => 'programs/about-our-programs#strengthening-schools',
            'Strengthening workplaces' => 'programs/about-our-programs#strengthening-workplaces',
            'Mobilizing communities' => 'programs/about-our-programs#mobilizing-communities',
            'Training programs' => 'programs/about-our-programs#training-programs',
            'Inequality and suicide' => 'programs/about-our-programs#inequality-and-suicide',
            'Internet and suicide' => 'programs/internet-and-suicide',
            'Young people and suicide' => 'programs/about-our-programs#young-people-and-suicide',
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
