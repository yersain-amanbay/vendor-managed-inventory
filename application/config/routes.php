<?php

return [
    'vendor-management-inventory'  => [
        'controller' => 'redirect',
        'action' => ''
    ],

    'vendor-management-inventory/vmi/kunden'  => [
        'controller' => 'vmi',
        'action' => 'kunden'
    ],

    'vendor-management-inventory/vmi/artikel'  => [
        'controller' => 'vmi',
        'action' => 'artikel'
    ],

	'vendor-management-inventory/account/login'  => [
		'controller' => 'account',
		'action' => 'login'
	],

	'vendor-management-inventory/account/register'  => [
		'controller' => 'account',
		'action' => 'register'
	],

	'news/show'  => [
		'controller' => 'news',
		'action' => 'show'
	]
];


