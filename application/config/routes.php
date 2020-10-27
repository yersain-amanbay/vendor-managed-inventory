<?php

$subdomain = "vendor-management-inventory";

return [
    $subdomain  => [
        'controller' => 'vmi',
        'action' => 'redirect'
    ],

    $subdomain.'/vmi/kunden'  => [
        'controller' => 'vmi',
        'action' => 'kunden'
    ],

    $subdomain.'/vmi/artikel'  => [
        'controller' => 'vmi',
        'action' => 'artikel'
    ],

    $subdomain.'/auswertungen/allgemein'  => [
        'controller' => 'auswertungen',
        'action' => 'allgemein'
    ],

    $subdomain.'/auswertungen/abrechnung'  => [
        'controller' => 'auswertungen',
        'action' => 'abrechnung'
    ],

    $subdomain.'/auswertungen/statistik'  => [
        'controller' => 'auswertungen',
        'action' => 'statistik'
    ],

    $subdomain.'/verwaltung/benutzer'  => [
        'controller' => 'verwaltung',
        'action' => 'benutzer'
    ],

    $subdomain.'/verwaltung/kunden'  => [
        'controller' => 'verwaltung',
        'action' => 'kunden'
    ],

    $subdomain.'/verwaltung/artikel'  => [
        'controller' => 'verwaltung',
        'action' => 'artikel'
    ],

    $subdomain.'/verwaltung/order'  => [
        'controller' => 'verwaltung',
        'action' => 'order'
    ],

    $subdomain.'/verwaltung/rechte'  => [
        'controller' => 'verwaltung',
        'action' => 'rechte'
    ],

    $subdomain.'/account/login'  => [
		'controller' => 'account',
		'action' => 'login'
	],

    $subdomain.'/account/profile'  => [
		'controller' => 'account',
		'action' => 'profile'
	]
];


