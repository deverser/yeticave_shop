<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

// Список лотов товаров
$goods = array(
    [
        'name'=>'2014 Rossignol District Snowboard',
        'category'=>'Доски и лыжи',
        'price'=> 10990,
        'img'=>'img/lot-1.jpg',
        'description' => 'Test'
    ],
    [
        'name'=>'DC Ply Mens 2016/2017 Snowboard',
        'category'=>'Доски и лыжи',
        'price'=> 159999,
        'img'=>'img/lot-2.jpg',
        'description' => 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив
          снег
          мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот
          снаряд
          отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом
          кэмбер
          позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется,
          просто
          посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла
          равнодушным.'
    ],
    [
        'name'=>'Крепления Union Contact Pro 2015 года размер L/XL',
        'category'=>'Крепления',
        'price'=> 8000,
        'img'=>'img/lot-3.jpg',
        'description' => 'Test'
    ],
    [
        'name'=>'Ботинки для сноуборда DC Mutiny Charcoal',
        'category'=>'Ботинки',
        'price'=> 10999,
        'img'=>'img/lot-4.jpg',
        'description' => 'Test'
    ],
    [
        'name'=>'Куртка для сноуборда DC Mutiny Charcoal',
        'category'=>'Одежда',
        'price'=> 7500,
        'img'=>'img/lot-5.jpg',
        'description' => 'Test'
    ],
    [
        'name'=>'Маска Oakley Canopy',
        'category'=>'Разное',
        'price'=> 5400,
        'img'=>'img/lot-6.jpg',
        'description' => 'Test'
    ]);
