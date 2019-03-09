<?php
date_default_timezone_set("Asia/Yekaterinburg");

// функция-шаблонизатор для генерации html-кода страниц
function renderTemplate($path, $data) {
    if (!file_exists($path)) {
        return '';
    }
    else {
        ob_start('ob_gzhandler');
        extract($data, EXTR_SKIP);
        include_once($path);
        return ob_get_clean();
    }
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

// функция для вывода времени до начала новых суток в карточке лота
function timeCount() {
    $ts_midnight = strtotime('tomorrow');
    $ts = strtotime('now');
    $secs_to_midnight = $ts_midnight - $ts;
    $hrs = floor($secs_to_midnight / 3600);
    $mins = floor(($secs_to_midnight % 3600) / 60);
    return $hrs.':'.$mins;
}

// Функция для форматирования пользовательского ввода от html тегов
function inputFormat($data) {
    return htmlspecialchars($data);
}
