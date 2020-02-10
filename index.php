<?php
    // Variables
    $title = 'DWE Грузоперевозки';
    $start = '<section id="allIndex">';

    require_once 'tamplate/header.php';
    require_once 'tamplate/navigation.php';

?>

        <h1 class="header1">ЭКОНОМИЧНАЯ И НАДЕЖНАЯ ДОСТАВКА ИЗ КИТАЯ</h1>
        <h2>В РОССИЮ, КАЗАХСТАН, СТРАНЫ ЕС, АМЕРИКА И КАНАДА, УЗБЕКИСТАН И УКРАИНА</h2>
        <h2>ЛЮБОЙ ВЕС, ГАРАНТИЯ, В СРОК!</h2>

        <form action="app/api/tracking" id="tracking" method="POST">
            <label for="trackNum" class="hiddenText">trackNum</label>
            <input type="text" id="trackNum" class="inp" name="numberTracking" placeholder="Трек номер" required>
            <input type="submit" class="btn" name="sendTracking" value="Узнать нахождение">
        </form>

        <form action="" id="calculator" method="POST">
            <label for="fromCount" class="hiddenText">from</label>
            <select autofocus name="from" class="inp" required id="fromCount">
                <option value="">От куда</option>
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
        </form>

    </section>

<?php
    require_once 'tamplate/footer.php';
?>