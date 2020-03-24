<?php

@session_start();

if(!empty($_SESSION['status'])) {
    switch($_SESSION['status']) {
        case 'AWAITING_SYNC':
            $_SESSION['status'] = 'Ожидает синхронизации. Данные заказа пока не появились в бэкофисе';
        break;
        case 'NEW':
            $_SESSION['status'] = 'На складе в Китае';
        break;
        case 'PICKUP':
            $_SESSION['status'] = 'Забран у отправителя';
        break;
        case 'ACCEPTED':
            $_SESSION['status'] = 'Получен складом';
        break;
        case 'INVENTORY':
            $_SESSION['status'] = 'Инвентаризация';
        break;
        case 'DEPARTURING':
            $_SESSION['status'] = 'Планируется отправка';
        break;
        case 'DEPARTURE':
            $_SESSION['status'] = 'Отправлено со склада';
        break;
        case 'DELIVERY':
            $_SESSION['status'] = 'Выдан курьеру на доставку';
        break;
        case 'COURIERDELIVERED':
            $_SESSION['status'] = 'Доставлен (предварительно)';
        break;
        case 'COMPLETE':
            $_SESSION['status'] = 'Доставлен';
        break;
        case 'PARTIALLY':
            $_SESSION['status'] = 'Доставлен частично';
        break;
        case 'COURIERRETURN':
            $_SESSION['status'] = 'Возвращено курьером. Курьер не смог доставить до получателя, и вернул заказ обратно на склад. Это промежуточный статус, после которого менеджер выясняет, нужно ли пытаться заново доставить заказ, или это окончательная недоставка.';
        break;
        case 'CANCELED':
            $_SESSION['status'] = 'Не доставлен (Возврат/Отмена)';
        break;
        case 'RETURNING':
            $_SESSION['status'] = 'Планируется возврат';
        break;
        case 'RETURNED':
            $_SESSION['status'] = 'Возвращен';
        break;
        case 'WMSASSEMBLED':
            $_SESSION['status'] = 'Скомплектован на складе';
        break;
        case 'WMSDISASSEMBLED':
            $_SESSION['status'] = 'Разукомплектован';
        break;
        case 'CONFIRM':
            $_SESSION['status'] = 'Согласована доставка';
        break;
        case 'DATECHANGE':
            $_SESSION['status'] = 'Перенос';
        break;
        case 'NEWPICKUP':
            $_SESSION['status'] = 'Создан забор';
        break;
        case 'UNCONFIRM':
            $_SESSION['status'] = 'Не удалось согласовать доставку';
        break;
        case 'PICKUPREADY':
            $_SESSION['status'] = 'Готов к выдаче';
        break;
        case 'LOST':
            $_SESSION['status'] = 'Утрачен/утерян';
        break;
        case 'COURIERPARTIALLY':
            $_SESSION['status'] = 'Частично со слов курьера';
        break;
        case 'COURIERCANCELED':
            $_SESSION['status'] = 'Отказ со слов курьера';
        break;
    }
}
    
// Модальное окно данных по трек номеру
if(!empty($_SESSION['tracking'])) {
    echo '<div class="modal">';
        echo '<img src="public/images/close.svg" alt="close icon" class="closeBtn" onclick="closeModal();">';
        echo '<p class="trackNumber">Трек номер: ' . $_SESSION['tracking'] . '</p>';
            echo '<p class="headModalLine">Дата отправки — </p> ';
            echo '<p>' . $_SESSION['datefrom'] . ';</p><hr>';

        //echo '<p class="headModalLine">Город отправки — </p> ';
        //echo '<p>' . $_SESSION['townfrom'] . ';</p><hr>';

        //echo '<p class="headModalLine">Дата доставки — </p> ';
        //echo '<p>' . $_SESSION['dateto'] . ';</p><hr>';

        //echo '<p class="headModalLine">Город доставки — </p> ';
        //echo '<p>' . $_SESSION['townto'] . ';</p><hr>';

        echo '<p class="headModalLine">Общий вес — </p> ';
        echo '<p>' . $_SESSION['mass'] . ' кг.;</p><hr>';

        echo '<p class="headModalLine">Количество мест — </p> ';
        echo '<p>' . $_SESSION['mest'] . ' мест-a;</p><hr>';

        echo '<p class="headModalLine">Статус — </p> ';
        echo '<p>' . $_SESSION['status'] . ';</p><hr>';
    echo '</div>';
    // Удаляем временные данные трек номера
    unset($_SESSION['tracking']);
    unset($_SESSION['townfrom']);
    unset($_SESSION['datefrom']);
    unset($_SESSION['dateto']);
    unset($_SESSION['townto']);
    unset($_SESSION['mass']);
    unset($_SESSION['mest']);
    unset($_SESSION['status']);
}