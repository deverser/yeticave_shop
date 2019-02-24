<?php
include_once 'functions.php';

$is_auth = (bool) rand(0, 1);

$user_name = 'Александр';
$user_avatar = 'img/user.jpg';

$categories = array('Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное');
$goods = array(
        'id_1'=>array('name'=>'2014 Rossignol District Snowboard',
                      'category'=>'Доски и лыжи',
                      'price'=> 10990,
                      'img'=>'img/lot-1.jpg'),
         'id_2'=>array('name'=>'DC Ply Mens 2016/2017 Snowboard',
                       'category'=>'Доски и лыжи',
                       'price'=> 159999,
                       'img'=>'img/lot-2.jpg'),
          'id_3'=>array('name'=>'Крепления Union Contact Pro 2015 года размер L/XL',
                        'category'=>'Крепления',
                        'price'=> 8000,
                        'img'=>'img/lot-3.jpg'),
          'id_4'=>array('name'=>'Ботинки для сноуборда DC Mutiny Charcoal',
                        'category'=>'Ботинки',
                        'price'=> 10999,
                        'img'=>'img/lot-4.jpg'),
          'id_5'=>array('name'=>'Куртка для сноуборда DC Mutiny Charcoal',
                        'category'=>'Одежда',
                        'price'=> 7500,
                        'img'=>'img/lot-5.jpg'),
          'id_6'=>array('name'=>'Маска Oakley Canopy',
                        'category'=>'Разное',
                        'price'=> 5400,
                        'img'=>'img/lot-6.jpg')
                );

$page_content = renderTemplate('templates/index.php', ['goods' => $goods]);
$layout = renderTemplate('templates/layout.php',
                           ['page_title' => 'Главная', 'is_auth' => $is_auth,
                            'user_name' => $user_name, 'user_avatar' => $user_avatar,
                            'page_content' => $page_content, 'categories' => $categories]);
print($layout);
