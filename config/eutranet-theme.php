<?php

return [
    'name' => 'Eutranet\'s Laravel Theme',
    'description' => 'Laravel Theme should be installed after Eutranet\'s Init package.',
    'tables' => [
        'themes',
    ],
    'migrations' => [
        'create_eutranet_theme_tables',
        'create_news_items_table'
    ],
    'models' => [
        'Theme'
    ],
];
