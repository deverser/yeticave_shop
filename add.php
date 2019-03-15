<?php
/**
 * Created by PhpStorm.
 * User: Alexander M.
 * Date: 10.03.19
 * Time: 18:35
 */
require_once 'functions.php';
require_once 'data.php';

$is_auth = (bool) rand(0, 1);
$user_name = 'Александр';
$user_avatar = 'img/user.jpg';
$categories = ['Доски и лыжи' , 'Крепления' , 'Ботинки' , 'Одежда' , 'Инструменты' , 'Разное'];
// Сырые наброски. Требуется доработка напильником.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $required = ['lot-name', 'category', 'message', 'lot-rate', 'lot-step', 'lot-date', 'img'];
    $required_int = ['lot-rate', 'lot-step'];
    $new_lot = $_POST;
    $errors = [];

    foreach ($new_lot as $key => $value) {
        if (in_array($key, $required) && !$value) {
            $errors[$key] = 'Это поле необходимо заполнить';
        }
        if (in_array($key, $required_int) && !ctype_digit($value)) {
            $errors[$key] = 'Это поле должно быть числовым';
        }
    }

    if (!empty($_FILES['img']['name'])) {
        $tmp_name = $_FILES['img']['tmp_name'];
        $path = 'img/'.$_FILES['img']['name'];

        $f_info = finfo_open(FILEINFO_MIME_TYPE);
        $file_type = finfo_file($f_info, $tmp_name);
        if ($file_type == "image/jpeg" && !$errors) {
            move_uploaded_file($tmp_name, $path);
            $new_lot['img'] = $path;
        } else {
            $errors['img'] = 'Загрузите изображение в формате Jpeg';
        }
    }
    else {
        $errors['img'] = 'Вы не загрузили файл изображения';
    }
    if (count($errors)) {
        $page_content = renderTemplate('templates/add.php', ['categories' => $categories,
                                                                   'errors' => $errors,
                                                                   'new_lot' => $new_lot]);
    }
    else {
        $page_content = renderTemplate('templates/lot.php', ['categories' => $categories,
                                                                   'bets' => $bets,
                                                                   'lot' => $new_lot]);
    }
}
else {
    $page_content = renderTemplate('templates/add.php', ['categories' => $categories]);
}

$layout = renderTemplate('templates/layout.php', [
    'page_title' => 'Добавление нового лота',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'page_content' => $page_content,
    'categories' => $categories
]);

echo $layout;
