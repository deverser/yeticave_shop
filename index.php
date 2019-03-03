<?php
include_once 'functions.php';
include_once 'data.php';

$is_auth = (bool) rand(0, 1);

$user_name = 'Александр';
$user_avatar = 'img/user.jpg';

$categories = array('Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное');

$page_content = renderTemplate('templates/index.php', ['goods' => $goods]);
$layout = renderTemplate('templates/layout.php',
                           ['page_title' => 'Главная', 'is_auth' => $is_auth,
                            'user_name' => $user_name, 'user_avatar' => $user_avatar,
                            'page_content' => $page_content, 'categories' => $categories]);
print($layout);
