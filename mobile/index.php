<?php
    // Variables
    $title = 'DWE Грузоперевозки';

    require_once '../tamplate/headerMobile.php';
    require_once '../tamplate/navigation.php';

?>
        <style>
            html, body {
                overflow-x: hidden;
            }
        </style>

        <h1 class="header1">ЭКОНОМИЧНАЯ И НАДЕЖНАЯ ДОСТАВКА ИЗ КИТАЯ</h1>
        <h2>В РОССИЮ, КАЗАХСТАН, СТРАНЫ ЕС, АМЕРИКА И КАНАДА, УЗБЕКИСТАН И УКРАИНА</h2>
        <h2>ЛЮБОЙ ВЕС, ГАРАНТИЯ, В СРОК!</h2>

        <form action="../app/api/tracking" id="tracking" method="POST">
        <label for="tracking" class="label">Отслеживание посылки</label>
            <label for="trackNum" class="hiddenText">trackNum</label>
            <input type="text" id="trackNum" class="inp" name="numberTracking" placeholder="Трек номер" required autocomplete="off">
            <input type="submit" class="btn" name="sendTracking" value="Узнать нахождение">
        </form>

        <form  id="calculator" method="POST">
            <label for="calculator" class="label">Калькулятор стоимости доставки</label>
            <label for="fromCount" class="hiddenText">from</label>
            <select autofocus name="from" class="inp" required id="fromCount" onchange="selectCountryFrom(this);">
                <option value="">Откуда</option>
                <option value="us">Америка</option>
                <option value="cn">Китай</option>
                <option value="tr">Турция</option>
            </select>
            <label for="toCount" class="hiddenText">to</label>
            <select autofocus name="to" class="inp" required onchange="showCity(this);" id="toCount">
                <option value="" selected="selected">Куда</option>
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
            <select autofocus name="UZ" class="inp" required style="display: none;" id="cityUZ">
                <option value="">Город</option>
                <option value="1">Аккурган</option>
                <option value="2">Акташ</option>
                <option value="3">Алат</option>
                <option value="4">Алмалык</option>
                <option value="5">Ангрен</option>
                <option value="6">Андижан</option>
                <option value="7">Асака</option>
                <option value="8">Ахангаран</option>
                <option value="9">Байсун</option>
                <option value="10">Бахт</option>
                <option value="11">Бекабад</option>
                <option value="12">Беруни</option>
                <option value="13">Бешарык</option>
                <option value="14">Бешкент</option>
                <option value="15">Бука</option>
                <option value="16">Булунгур</option>
                <option value="17">Бустан</option>
                <option value="18">Бухара</option>
                <option value="19">Вабкент</option>
                <option value="20">Гагарин</option>
                <option value="21">Газалкент</option>
                <option value="22">Газли</option>
                <option value="23">Галаасия</option>
                <option value="24">Галляарал</option>
                <option value="25">Гиждуван</option>
                <option value="26">Гузар</option>
                <option value="27">Гулистан</option>
                <option value="28">Даштабад</option>
                <option value="29">Денау</option>
                <option value="30">Джалакудук</option>
                <option value="31">Джамбай</option>
                <option value="32">Джаркурган</option>
                <option value="33">Джизак</option>
                <option value="34">Джума</option>
                <option value="35">Дустабад</option>
                <option value="36">Дустлик</option>
                <option value="37">Зарафшан</option>
                <option value="38">Иштыхан</option>
                <option value="39">Каган</option>
                <option value="40">Камаши</option>
                <option value="41">Каракуль</option>
                <option value="42">Карасу</option>
                <option value="43">Караулбазар</option>
                <option value="44">Карши</option>
                <option value="45">Касан</option>
                <option value="46">Касансай</option>
                <option value="47">Каттакурган</option>
                <option value="48">Келес</option>
                <option value="49">Китаб</option>
                <option value="50">Коканд</option>
                <option value="51">Кува</option>
                <option value="52">Кувасай</option>
                <option value="53">Кумкурган</option>
                <option value="54">Кунград</option>
                <option value="55">Кургантепа</option>
                <option value="56">Кызылтепа</option>
                <option value="57">Мангит</option>
                <option value="58">Маргилан</option>
                <option value="59">Мархамат</option>
                <option value="60">Мубарек</option>
                <option value="61">Муйнак</option>
                <option value="62">Навои</option>
                <option value="63">Наманган</option>
                <option value="64">Нукус</option>
                <option value="65">Нурабад</option>
                <option value="66">Нурата</option>
                <option value="67">Нурафшон</option>
                <option value="68">Пайарык</option>
                <option value="69">Пайтуг</option>
                <option value="70">Пап</option>
                <option value="71">Паркент</option>
                <option value="72">Пахтаабад</option>
                <option value="73">Пахтакор</option>
                <option value="74">Питнак</option>
                <option value="75">Пскент</option>
                <option value="76">Риштан</option>
                <option value="77">Ромитан</option>
                <option value="78">Самарканд</option>
                <option value="79">Сырдарья</option>
                <option value="80">Талимарджан</option>
                <option value="81">Тахиаташ</option>
                <option value="82">Ташкент</option>
                <option value="83">Термез</option>
                <option value="84">Тинчлик</option>
                <option value="85">Туракурган</option>
                <option value="86">Турткуль</option>
                <option value="87">Ургенч</option>
                <option value="88">Ургут</option>
                <option value="89">Учкудук</option>
                <option value="90">Учкурган</option>
                <option value="91">Фергана</option>
                <option value="92">Хаккулабад</option>
                <option value="93">Халкабад</option>
                <option value="94">Ханабад</option>
                <option value="96">Хива</option>
                <option value="97">Ходжаабад</option>
                <option value="98">Ходжейли</option>
                <option value="99">Чартак</option>
                <option value="100">Челек</option>
                <option value="101">Чимбай</option>
                <option value="102">Чиназ</option>
                <option value="103">Чиракчи</option>
                <option value="104">Чирчик</option>
                <option value="105">Чуст</option>
                <option value="106">Шаргунь</option>
                <option value="107">Шафиркан</option>
                <option value="108">Шахрисабз</option>
                <option value="109">Шахрихан</option>
                <option value="110">Шерабад</option>
                <option value="111">Ширин</option>
                <option value="112">Шуманай</option>
                <option value="113">Шурчи</option>
                <option value="114">Яйпан</option>
                <option value="115">Яккабаг</option>
                <option value="116">Янгиабад</option>
                <option value="117">Янгиер</option>
                <option value="118">Янги-Нишан</option>
                <option value="119">Янгирабад</option>
                <option value="120">Янгиюль</option>
            </select>
            <select autofocus name="KG" class="inp" required style="display: none;" id="cityKG">
                <option value="">Город</option>
                <option value="1">Айдаркен</option>
                <option value="2">Баетов</option>
                <option value="3">Балыкчы</option>
                <option value="4">Баткен</option>
                <option value="5">Бишкек</option>
                <option value="6">Джалал-Абад</option>
                <option value="7">Исфана</option>
                <option value="8">Кадамжай</option>
                <option value="9">Каинды</option>
                <option value="10">Кант</option>
                <option value="11">Кара-Балта</option>
                <option value="12">Каракол</option>
                <option value="13">Кара-Куль</option>
                <option value="14">Кара-Суу</option>
                <option value="15">Кемин</option>
                <option value="16">Кербен</option>
                <option value="17">Кок-Джангак</option>
                <option value="18">Кочкор-Ата</option>
                <option value="19">Кызыл-Кия</option>
                <option value="20">Майлуу-Суу</option>
                <option value="21">Нарын</option>
                <option value="22">Ноокат</option>
                <option value="23">Орловка</option>
                <option value="24">Ош</option>
                <option value="25">Рыбачье</option>
                <option value="26">Сулюкта</option>
                <option value="27">Талас</option>
                <option value="28">Таш-Кумыр</option>
                <option value="29">Токмак</option>
                <option value="30">Токтогул</option>
                <option value="31">Узген</option>
                <option value="32">Чолпон-Ата</option>
                <option value="33">Шопоков</option>
            </select>
            <label for="mass" class="hiddenText">mass</label>
            <input type="text" class="inp" name="mass" placeholder="Вес кг." id="mass" autocomplete="off">
            <p id="resCalc"></p>
            <p class="infoCalc">*Данный расчёт является ориентировочным.</p>
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
                        <input type="text" class="inpInfo" placeholder="QiD" required name="fromQID">
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
    

<?php
    require_once '../tamplate/footerIndexMobile.php';
?>