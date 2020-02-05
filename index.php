<?php

    require_once 'app/libs/debug.php';

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
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgb(88, 139, 221)">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="DWE">
    <meta name="keywords" content="DWE">
    <meta name="author" content="DWE">

    <!-- CODELAB: Add iOS meta tags and icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="newProduct">
    <link rel="apple-touch-icon" href="public/images/logo.png">
    <link rel="stylesheet" href="public/styles/allStyle.css">
    <link rel="stylesheet" href="public/styles/desctop.css">
    <link rel="stylesheet" href="public/styles/mobile.css">
    <link rel="stylesheet" href="public/styles/modalStyle.css">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="public/images/miniLogo.png" type="image/png">

    <title>DWE</title>

</head>
<body>
    <header>
        <a href="index">
            <img src="public/images/logo.png" alt="logotype dwe dwexpress" class="logo">
        </a>
        <div class="headerTexts">
            <p class="headerText">ВЫСОКАЯ СКОРОСТЬ ДОСТАВКИ</p>
            <p class="headerText">ВЫГОДНЫЕ УСЛОВИЯ</p>
            <p class="headerText">БЫСТРЫЙ РАСЧЕТ</p>
        </div>
    </header>
    <menu>
        
    </menu>
<!--########################## INDEX ##############################-->
<!--########################## INDEX ##############################-->
<!--########################## INDEX ##############################-->

    

    <script src="public/scripts/libs/trackingModal.js"></script>
</body>
</html>