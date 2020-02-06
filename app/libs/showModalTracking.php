<?php

session_start();
    
// Модальное окно данных по трек номеру
if(!empty($_SESSION['tracking'])) {
    echo '<div class="modal">';
        echo '<img src="public/images/close.svg" alt="close icon" class="closeBtn" onclick="closeModal();">';
        echo '<p class="trackNumber">Трек номер: ' . $_SESSION['tracking'] . '</p>';
            echo '<p class="headModalLine">Дата отправки — </p> ';
            echo '<p>' . $_SESSION['datefrom'] . ';</p><hr>';

        echo '<p class="headModalLine">Город отправки — </p> ';
        echo '<p>' . $_SESSION['townfrom'] . ';</p><hr>';

        echo '<p class="headModalLine">Дата доставки — </p> ';
        echo '<p>' . $_SESSION['dateto'] . ';</p><hr>';

        echo '<p class="headModalLine">Город доставки — </p> ';
        echo '<p>' . $_SESSION['townto'] . ';</p><hr>';

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