<?php

return [
	'name' => 'Eutranet\'s Laravel Theme',
	'description' => 'Laravel Theme is the second Eutranet\'s core packages',
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