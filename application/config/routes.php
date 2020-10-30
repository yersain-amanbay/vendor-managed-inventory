<?php
include 'conf.main.php';
$url = trim(subdomain, '/');

return [
    $url  => [
        'controller' => 'vmi',
        'action' => 'redirect'
    ],

    $url.'/vmi/kunden'  => [
        'controller' => 'vmi',
        'action' => 'kunden'
    ],

    $url.'/vmi/artikel'  => [
        'controller' => 'vmi',
        'action' => 'artikel'
    ],

    $url.'/auswertungen/allgemein'  => [
        'controller' => 'auswertungen',
        'action' => 'allgemein'
    ],

    $url.'/auswertungen/abrechnung'  => [
        'controller' => 'auswertungen',
        'action' => 'abrechnung'
    ],

    $url.'/auswertungen/statistik'  => [
        'controller' => 'auswertungen',
        'action' => 'statistik'
    ],

    $url.'/verwaltung/benutzer'  => [
        'controller' => 'verwaltung',
        'action' => 'benutzer'
    ],

    $url.'/verwaltung/kunden'  => [
        'controller' => 'verwaltung',
        'action' => 'kunden'
    ],

    $url.'/verwaltung/artikel'  => [
        'controller' => 'verwaltung',
        'action' => 'artikel'
    ],

    $url.'/verwaltung/order'  => [
        'controller' => 'verwaltung',
        'action' => 'order'
    ],

    $url.'/verwaltung/rechte'  => [
        'controller' => 'verwaltung',
        'action' => 'rechte'
    ],

    $url.'/account/login'  => [
		'controller' => 'account',
		'action' => 'login'
	],

    $url.'/account/logout'  => [
        'controller' => 'account',
        'action' => 'logout'
    ],

    $url.'/account/profile'  => [
		'controller' => 'account',
		'action' => 'profile'
	]
];


