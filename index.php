<?php
    // Variables
    $title = 'DWE Грузоперевозки';
    $start = '<section id="allIndex">';

    require_once 'tamplate/header.php';
    require_once 'tamplate/navigation.php';

?>
        <style>
            html, body {
                overflow: hidden;
            }
        </style>

        <!--<div class="callBack">
            <img src="public/images/icons/contact.png" alt="phone icon" class="callBackIcon">
        </div>-->

        <h1 class="header1">ЭКОНОМИЧНАЯ И НАДЕЖНАЯ ДОСТАВКА ИЗ КИТАЯ</h1>
        <h2>В РОССИЮ, КАЗАХСТАН, СТРАНЫ ЕС, АМЕРИКА И КАНАДА, УЗБЕКИСТАН И УКРАИНА</h2>
        <h2>ЛЮБОЙ ВЕС, ГАРАНТИЯ, В СРОК!</h2>

        <form action="app/api/tracking" id="tracking" method="POST">
        <label for="tracking" class="label">Отслеживание посылки</label>
            <label for="trackNum" class="hiddenText">trackNum</label>
            <input type="text" id="trackNum" class="inp" name="numberTracking" placeholder="Трек номер" required autocomplete="off">
            <input type="submit" class="btn" name="sendTracking" value="Узнать нахождение">
        </form>

        <form  id="calculator" method="POST">
            <label for="calculator" class="label">Калькулятор стоимости доставки</label>
            <label for="fromCount" class="hiddenText">from</label>
            <select autofocus name="from" class="inp" required id="fromCount">
                <option value="">Откуда</option>
                <option value="cn">Китай</option>
                <option value="tr">Турция</option>
            </select>
            <label for="toCount" class="hiddenText">to</label>
            <select autofocus name="to" class="inp" required onchange="showCity(this);" id="toCount">
                <option value="">Куда</option>
                <option value="kz">Казахстан</option>
                <option value="uz">Узбекистан</option>
                <option value="kg">Киргизия</option>
                <option value="ru">Россия(Москва)</option>
            </select>
            <select autofocus name="KZ" class="inp" required style="display: none;" id="cityKZ">
                <option value="">Город</option>
                <option value="1">Нур-Султан</option>
                <option value="2">Алматы</option>
                <option value="3">Актау</option>
                <option value="4">Актобе</option>
                <option value="5">Атырау</option>
                <option value="6">Караганда</option>
                <option value="7">Костанай</option>
                <option value="8">Павлодар</option>
                <option value="9">Петропавловск</option>
                <option value="10">Шымкент</option>
                <option value="11">Уральск</option>
                <option value="12">Усть-Каменогорск</option>
            </select>
            <label for="mass" class="hiddenText">mass</label>
            <input type="text" class="inp" name="mass" placeholder="Вес кг." id="mass" autocomplete="off">
            <p id="resCalc"></p>
            <p>*Данный расчёт является ориентировочным.</p>
            <!--<p>Важно! Если объемный вес посылки превышает фактический в 2 раза и более, расчетный вес определяется по формуле: (объемный вес - фактический) / 2 + фактический вес. Данная формула просчета стоимости доставки распространяется на все виды доставки.</p>-->
        </form>

        <button name="zakaz" class="zakaz" id="zakaz">Заказать доставку</button>

            <div id="modalInfo">
                <span class="closeInfo"></span>
                <h1>Заявка на доставку</h1>

                <form action="app/api/zakaz" method="POST">
                    <div class="oneZakaz">
                        <p>Отправитель</p>
                        <input type="text" class="inpInfo" placeholder="Компания отправитель" id="sendCompany" required name="fromCompany">
                        <p>
                            <input type="checkbox" name="fizLic" id="fizLic">
                            Физическое лицо
                        </p>
                        <input type="text" class="inpInfo" placeholder="Контактное лицо отправителя" required name="fromFIO">
                        <input type="text" class="inpInfo" placeholder="Город отправителя" required name="fromCity">
                        <input type="text" class="inpInfo" placeholder="Адрес отправителя" required name="fromAdres">
                        <input type="text" class="inpInfo" placeholder="Телефон отправителя" required name="fromPhone">
                        <input type="date" class="inpInfo" placeholder="Дата забора" required name="fromDate">
                        <input type="email" class="inpInfo" placeholder="E-mail" required name="fromEmail">
                    </div>
                    <div class="twoZakaz">
                        <p>Получатель</p>
                        <input type="text" class="inpInfo" placeholder="Компания получатель" required name="toCompany">
                        <input type="text" class="inpInfo" placeholder="Контактное лицо получателя" required name="toFIO">
                        <input type="text" class="inpInfo" placeholder="Город получателя" required name="toCity">
                        <input type="text" class="inpInfo" placeholder="Адрес получателя" required name="toAdres">
                        <input type="text" class="inpInfo" placeholder="Телефон получателя" required name="toPhone">
                        <input type="text" class="inpInfo" placeholder="Почтовый индекс" required name="toIndex">
                        <input type="text" class="inpInfo" placeholder="Общий вес" required name="toMass">
                        <input type="text" class="inpInfo" placeholder="Объявленная ценность" required name="toPrice">
                        <input type="text" class="inpInfo" placeholder="Количество" required name="toItems">
                        <input type="text" class="inpInfo" placeholder="Вложение" required name="toToItems">
                    </div>
                    <p>
                        <input type="submit" class="zakaz" name="sendZakaz" value="Обработать заказ">
                    </p>
                </form>
            </div>
    </section>

<?php
    require_once 'tamplate/footerIndex.php';
?>