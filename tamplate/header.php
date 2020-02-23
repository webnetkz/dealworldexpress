<?php

    require_once 'app/libs/debug.php';

    require_once 'app/libs/showModalTracking.php';

    require_once 'app/libs/showModalInfo.php';

    if(empty($linkCSS)) {
        $linkCSS = null;
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
    <link rel="stylesheet" href="<?=$linkCSS?>">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="public/images/miniLogo.png" type="image/png">

    <title><?=$title?></title>
</head>
<body>

    <?=$start?>
        <a href="index">
            <img src="public/images/newLogo.svg" alt="logotype deal world express" class="logo">
        </a>
        <div class="mobileMenu">
            menu
        </div>
        <menu>
            <a href="index" name="menuItem">Главная</a>
            <a href="tarif" name="menuItem">Тарифы и сроки</a>
            <a href="about" name="menuItem">О нас</a>
            <a href="save" name="menuItem">Страхование</a>
            <a href="contact" name="menuItem">Контакты</a>
            <a href="https://home.courierexe.ru/290/" name="menuItem">Войти</a>
        </menu>
        <div class="language">
            <a href="index" class="lang activeLang">RU</a>
            <a href="eng/index" class="lang">ENG</a>
            <a href="cn/index" class="lang">CN</a>
        </div>

