<?php
$is_auth = rand(0, 1);
$user_name = 'Андрей'; // укажите здесь ваше имя

$categories = ["Доски и лыжи","Крепления","Ботинки","Одежда","Инструменты","Разное"];
$catalog = [
    [
    'name' => '2014 Rossignol District Snowboard',
    'cat' => $categories[0],
    'price' => '10999',
    'url' => 'img/lot-1.jpg'
    ],
    [
    'name' => 'DC Ply Mens 2016/2017 Snowboard',
    'cat' => $categories[0],
    'price' => '159999',
    'url' => 'img/lot-2.jpg'
    ],
    [
    'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
    'cat' => $categories[1],
    'price' => '8000',
    'url' => 'img/lot-3.jpg'
    ],
    [
    'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
    'cat' => $categories[2],
    'price' => '10999',
    'url' => 'img/lot-4.jpg'
    ],
    [
    'name' => 'Куртка для сноуборда DC Mutiny Charocal',
    'cat' => $categories[3],
    'price' => '7500',
    'url' => 'img/lot-5.jpg'
    ],
    [
    'name' => 'Маска Oakley Canopy',
    'cat' => $categories[5],
    'price' => '5400',
    'url' => 'img/lot-6.jpg'
    ]
];

?>