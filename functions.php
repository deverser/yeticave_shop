<?php
function renderTemplate($path, $data) {
    if (!file_exists($path)) {
        return '';
    }
    ob_start();
    extract($data, EXTR_SKIP);
    include_once ($path);
    return ob_get_clean();
}

// функция для вывода цены товара в отформатированном виде
function priceFormat($price) {
    $value = ceil($price);
    if ($value < 1000) {
        return $value." Ꝑ";
    }
    else {
        $formatted_price = number_format($value, 0, '.', ' ')." Ꝑ";
        return $formatted_price;
    }
}