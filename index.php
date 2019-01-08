<?php
require_once('functions.php');

date_default_timezone_set('europe/moscow');
$end_of_lot = strtotime('midnight tomorrow');
$diff_time = $end_of_lot - time();
$hours = floor($diff_time / 3600);
$minutes = floor(($diff_time % 3600) / 60);
$time_until_midnight = $hours . ':' . $minutes;

$is_auth = rand(0, 1);
$user_name_str = 'Александр Приколович';
$user_name = htmlspecialchars($user_name_str);
$user_avatar = 'img/user.jpg';
$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];
$lots = [
    [
        'title' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '10999',
        'url' => 'img/lot-1.jpg',
    ],
    [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '159999',
        'url' => 'img/lot-2.jpg',
    ],
    [
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => '8000',
        'url' => 'img/lot-3.jpg',
    ],
    [
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => '10999',
        'url' => 'img/lot-4.jpg',
    ],
    [
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => '7500',
        'url' => 'img/lot-5.jpg',
    ],
    [
        'title' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => '5400',
        'url' => 'img/lot-6.jpg',
    ]
];

$index_main = [
    'categories' => $categories,
    'lots' => $lots,
    'time_until_midnight' => $time_until_midnight
];

$index_data = render('index', $index_main);
print render('layout', [
    'main_content' => $index_data,
    'title' => $title,
    'categories' => $categories,
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar
]);
?>
