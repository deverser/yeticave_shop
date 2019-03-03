<?php
include_once 'data.php';
include_once 'functions.php';

$lot = null;
if (isset($_GET['lot_id'])) {
    $lot_id = $_GET['lot_id'];
    foreach ($goods as $key => $item) {
        if ($key == $lot_id) {
            $lot = $item;
            break;
        }
    }
}
if (!$lot) {
    http_response_code(404);
    header('HTTP/1.1 404 Not Found');
    header('Status: 404 Not Found');
    require_once('404.html');
    exit;
}
$page_content = renderTemplate('templates/lot.php', [
    'lot' => $lot,
    'title' => $lot['name'],
    'category' => $lot['category'],
    'price' => $lot['price'],
    'img' => $lot['img'],
    'lot_dscr' => $lot['description'],
    'bets' => $bets

]);
$layout = renderTemplate('templates/layout.php', [
    'page_title' => $lot['name'],
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'page_content' => $page_content,
    'categories' => $categories
]);
print($layout);