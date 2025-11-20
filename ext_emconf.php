<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[AASHRO] Good Food TYPO3 Template',
    'description' => 'Good Food is a modern and responsive TYPO3 template designed for restaurants, cafés, food blogs, and catering businesses. It features a clean and elegant design, easy customization, and SEO-friendly structure to showcase menus, recipes, and services beautifully.',
    'category' => 'templates',
    'author' => 'Team AASHRO',
    'author_email' => 'info@aashro.com',
    'author_company' => 'AASHRO Tech',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-12.5.99',
            'mask' => '8.3.11-9.0.7'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];