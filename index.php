<?php
    // Variables
    $title = 'DWE Грузоперевозки';
    $start = '<section id="allIndex">';

    require_once 'tamplate/headerIndex.php';
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
                <option value="ru">Россия</option>
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
            <select autofocus name="KG" class="inp" required style="display: none;" id="cityKG">
                <option value="">Город</option>
                <option value="1">Бишкек</option>
                <option value="2">Ош</option>
                <option value="3">Джалал-Абад</option>
                <option value="4">Каракол</option>
                <option value="5">Токмок</option>
                <option value="6">Узген</option>
                <option value="7">Балыкчы</option>
                <option value="8">Кара-Балта</option>
                <option value="9">Кара-Балта</option>
                <option value="10">Нарын</option>
                <option value="11">Талас</option>
                <option value="12">Кызыл-Кия</option>
                <option value="13">Кербен</option>
                <option value="14">Сулюкта</option>
                <option value="16">Баткен</option>
                <option value="16">Майлуу-Суу</option>
                <option value="17">Кант</option>
                <option value="18">Кара-Суу</option>
                <option value="19">Таш-Кумыр</option>
                <option value="20">Кара-Куль</option>
                <option value="21">Исфана</option>
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
            <select autofocus name="RU" class="inp" required style="display: none;" id="cityRU">
            <option value="">Город</option>
                <option value="1">Абакан</option>
                <option value="2">Азов</option>
                <option value="3">Александров</option>
                <option value="4">Алексин</option>
                <option value="5">Альметьевск</option>
                <option value="6">Анапа</option>
                <option value="7">Ангарск</option>
                <option value="8">Анжеро-Судженск</option>
                <option value="9">Апатиты</option>
                <option value="10">Арзамас</option>
                <option value="11">Армавир</option>
                <option value="12">Арсеньев</option>
                <option value="13">Артем</option>
                <option value="14">Архангельск</option>
                <option value="15">Асбест</option>
                <option value="16">Астрахань</option>
                <option value="17">Ачинск</option>
                <option value="18">Балаково</option>
                <option value="19">Балахна</option>
                <option value="20">Балашиха</option>
                <option value="21">Балашов</option>
                <option value="22">Барнаул</option>
                <option value="23">Батайск</option>
                <option value="24">Белгород</option>
                <option value="25">Белебей</option>
                <option value="26">Белово</option>
                <option value="27">Белорецк</option>
                <option value="28">Белореченск</option>
                <option value="29">Бердск</option>
                <option value="30">Березники</option>
                <option value="31">Березовский (Свердловская область)</option>
                <option value="32">Бийск</option>
                <option value="33">Биробиджан</option>
                <option value="34">Благовещенск (Амурская область)</option>
                <option value="35">Бор</option>
                <option value="36">Борисоглебск</option>
                <option value="37">Боровичи</option>
                <option value="38">Братск</option>
                <option value="39">Брянск</option>
                <option value="40">Бугульма</option>
                <option value="41">Буденновск</option>
                <option value="42">Бузулук</option>
                <option value="43">Буйнакск</option>
                <option value="44">Великие Луки</option>
                <option value="45">Великий Новгород</option>
                <option value="46">Верхняя Пышма</option>
                <option value="47">Видное</option>
                <option value="48">Владивосток</option>
                <option value="49">Владикавказ</option>
                <option value="50">Владимир</option>
                <option value="51">Волгоград</option>
                <option value="52">Волгодонск</option>
                <option value="53">Волжск</option>
                <option value="54">Волжский</option>
                <option value="55">Вологда</option>
                <option value="56">Вольск</option>
                <option value="57">Воркута</option>
                <option value="58">Воронеж</option>
                <option value="59">Воскресенск</option>
                <option value="60">Воткинск</option>
                <option value="61">Всеволожск</option>
                <option value="62">Выборг</option>
                <option value="63">Выкса</option>
                <option value="64">Вязьма</option>
                <option value="65">Гатчина</option>
                <option value="66">Геленджик</option>
                <option value="67">Георгиевск</option>
                <option value="68">Глазов</option>
                <option value="69">Горно-Алтайск</option>
                <option value="70">Грозный</option>
                <option value="71">Губкин</option>
                <option value="72">Гудермес</option>
                <option value="73">Гуково</option>
                <option value="74">Гусь-Хрустальный</option>
                <option value="75">Дербент</option>
                <option value="76">Дзержинск</option>
                <option value="77">Димитровград</option>
                <option value="78">Дмитров</option>
                <option value="79">Долгопрудный</option>
                <option value="80">Домодедово</option>
                <option value="81">Донской</option>
                <option value="82">Дубна</option>
                <option value="83">Евпатория</option>
                <option value="84">Егорьевск</option>
                <option value="85">Ейск</option>
                <option value="86">Екатеринбург</option>
                <option value="87">Елабуга</option>
                <option value="88">Елец</option>
                <option value="89">Ессентуки</option>
                <option value="90">Железногорск (Красноярский край)</option>
                <option value="91">Железногорск (Курская область)</option>
                <option value="92">Жигулевск</option>
                <option value="93">Жуковский</option>
                <option value="94">Заречный</option>
                <option value="96">Зеленогорск</option>
                <option value="97">Зеленодольск</option>
                <option value="98">Златоуст</option>
                <option value="99">Иваново</option>
                <option value="100">Ивантеевка</option>
                <option value="101">Ижевск</option>
                <option value="102">Избербаш</option>
                <option value="103">Иркутск</option>
                <option value="104">Искитим</option>
                <option value="105">Ишим</option>
                <option value="106">Ишимбай</option>
                <option value="107">Йошкар-Ола</option>
                <option value="108">Казань</option>
                <option value="109">Калининград</option>
                <option value="110">Калуга</option>
                <option value="111">Каменск-Уральский</option>
                <option value="112">Каменск-Шахтинский</option>
                <option value="113">Камышин</option>
                <option value="114">Канск</option>
                <option value="115">Каспийск</option>
                <option value="116">Кемерово</option>
                <option value="117">Керчь</option>
                <option value="118">Кинешма</option>
                <option value="119">Кириши</option>
                <option value="120">Киров (Кировская область)</option>
                <option value="121">Кирово-Чепецк</option>
                <option value="122">Киселевск</option>
                <option value="123">Кисловодск</option>
                <option value="124">Клин</option>
                <option value="125">Клинцы</option>
                <option value="126">Ковров</option>
                <option value="127">Когалым</option>
                <option value="128">Коломна</option>
                <option value="129">Комсомольск-на-Амуре</option>
                <option value="130">Копейск</option>
                <option value="131">Королев</option>
                <option value="132">Кострома</option>
                <option value="133">Котлас</option>
                <option value="134">Красногорск</option>
                <option value="135">Краснодар</option>
                <option value="136">Краснокаменск</option>
                <option value="137">Краснокамск</option>
                <option value="138">Краснотурьинск</option>
                <option value="139">Красноярск</option>
                <option value="140">Кропоткин</option>
                <option value="141">Крымск</option>
                <option value="142">Кстово</option>
                <option value="143">Кузнецк</option>
                <option value="144">Кумертау</option>
                <option value="145">Кунгур</option>
                <option value="146">Курган</option>
                <option value="147">Курск</option>
                <option value="148">Кызыл</option>
                <option value="149">Лабинск</option>
                <option value="150">Лениногорск</option>
                <option value="151">Ленинск-Кузнецкий</option>
                <option value="152">Лесосибирск</option>
                <option value="153">Липецк</option>
                <option value="154">Лиски</option>
                <option value="155">Лобня</option>
                <option value="156">Лысьва</option>
                <option value="157">Лыткарино</option>
                <option value="158">Люберцы</option>
                <option value="159">Магадан</option>
                <option value="160">Магнитогорск</option>
                <option value="161">Майкоп</option>
                <option value="162">Махачкала</option>
                <option value="163">Междуреченск</option>
                <option value="164">Мелеуз</option>
                <option value="165">Миасс</option>
                <option value="166">Минеральные Воды</option>
                <option value="167">Минусинск</option>
                <option value="168">Михайловка</option>
                <option value="169">Михайловск (Ставропольский край)</option>
                <option value="170">Мичуринск</option>
                <option value="171">Москва</option>
                <option value="172">Мурманск</option>
                <option value="173">Муром</option>
                <option value="174">Мытищи</option>
                <option value="175">Набережные Челны</option>
                <option value="176">Назарово</option>
                <option value="177">Назрань</option>
                <option value="178">Нальчик</option>
                <option value="179">Наро-Фоминск</option>
                <option value="180">Находка</option>
                <option value="181">Невинномысск</option>
                <option value="182">Нерюнгри</option>
                <option value="183">Нефтекамск</option>
                <option value="184">Нефтеюганск</option>
                <option value="185">Нижневартовск</option>
                <option value="186">Нижнекамск</option>
                <option value="187">Нижний Новгород</option>
                <option value="188">Елец</option>
                <option value="189">Нижний Тагил</option>
                <option value="190">Новоалтайск</option>
                <option value="191">Новокузнецк</option>
                <option value="192">Новокуйбышевск</option>
                <option value="193">Новомосковск</option>
                <option value="194">Новороссийск</option>
                <option value="196">Новосибирск</option>
                <option value="197">Новотроицк</option>
                <option value="198">Новоуральск</option>
                <option value="199">Новочебоксарск</option>
                <option value="200">Новочеркасск</option>
                <option value="201">Новошахтинск</option>
                <option value="202">Новый Уренгой</option>
                <option value="203">Ногинск</option>
                <option value="204">Норильск</option>
                <option value="205">Ноябрьск</option>
                <option value="206">Нягань</option>
                <option value="207">Обнинск</option>
                <option value="208">Одинцово</option>
                <option value="209">Озерск (Челябинская область)</option>
                <option value="210">Октябрьский</option>
                <option value="211">Омск</option>
                <option value="212">Орел</option>
                <option value="213">Оренбург</option>
                <option value="214">Орехово-Зуево</option>
                <option value="215">Орск</option>
                <option value="216">Павлово</option>
                <option value="217">Павловский Посад</option>
                <option value="218">Пенза</option>
                <option value="219">Первоуральск</option>
                <option value="220">Пермь</option>
                <option value="221">Петрозаводск</option>
                <option value="222">Петропавловск-Камчатский</option>
                <option value="223">Подольск</option>
                <option value="224">Полевской</option>
                <option value="225">Прокопьевск</option>
                <option value="226">Прохладный</option>
                <option value="227">Псков</option>
                <option value="228">Пушкино</option>
                <option value="229">Пятигорск</option>
                <option value="230">Раменское</option>
                <option value="231">Ревда</option>
                <option value="232">Реутов</option>
                <option value="233">Ржев</option>
                <option value="234">Рославль</option>
                <option value="235">Россошь</option>
                <option value="236">Ростов-на-Дону</option>
                <option value="237">Рубцовск</option>
                <option value="238">Рыбинск</option>
                <option value="239">Рязань</option>
                <option value="240">Салават</option>
                <option value="241">Сальск</option>
                <option value="242">Самара</option>
                <option value="243">Санкт-Петербург</option>
                <option value="244">Саранск</option>
                <option value="245">Сарапул</option>
                <option value="246">Саратов</option>
                <option value="247">Саров</option>
                <option value="248">Свободный</option>
                <option value="249">Севастополь</option>
                <option value="250">Северодвинск</option>
                <option value="251">Северск</option>
                <option value="252">Сергиев Посад</option>
                <option value="253">Серов</option>
                <option value="254">Серпухов</option>
                <option value="255">Сертолово</option>
                <option value="256">Сибай</option>
                <option value="257">Симферополь</option>
                <option value="258">Славянск-на-Кубани</option>
                <option value="259">Смоленск</option>
                <option value="260">Соликамск</option>
                <option value="261">Солнечногорск</option>
                <option value="262">Сосновый Бор</option>
                <option value="263">Сочи</option>
                <option value="264">Ставрополь</option>
                <option value="265">Старый Оскол</option>
                <option value="266">Стерлитамак</option>
                <option value="267">Ступино</option>
                <option value="268">Сургут</option>
                <option value="269">Сызрань</option>
                <option value="270">Сыктывкар</option>
                <option value="271">Таганрог</option>
                <option value="272">Тамбов</option>
                <option value="273">Тверь</option>
                <option value="274">Тимашевск</option>
                <option value="275">Тихвин</option>
                <option value="276">Тихорецк</option>
                <option value="277">Тобольск</option>
                <option value="278">Тольятти</option>
                <option value="279">Томск</option>
                <option value="280">Троицк</option>
                <option value="281">Туапсе</option>
                <option value="282">Туймазы</option>
                <option value="283">Тула</option>
                <option value="284">Тюмень</option>
                <option value="285">Узловая</option>
                <option value="286">Улан-Удэ</option>
                <option value="287">Ульяновск</option>
                <option value="288">Урус-Мартан</option>
                <option value="289">Усолье-Сибирское</option>
                <option value="290">Уссурийск</option>
                <option value="291">Усть-Илимск</option>
                <option value="292">Уфа</option>
                <option value="293">Ухта</option>
                <option value="294">Феодосия</option>
                <option value="296">Новосибирск</option>
                <option value="297">Новотроицк</option>
                <option value="298">Новоуральск</option>
                <option value="299">Новочебоксарск</option>
                <option value="300">Новочеркасск</option>
                <option value="301">Фрязино</option>
                <option value="302">Хабаровск</option>
                <option value="303">Ханты-Мансийск</option>
                <option value="304">Хасавюрт</option>
                <option value="305">Химки</option>
                <option value="306">Чайковский</option>
                <option value="307">Чапаевск</option>
                <option value="308">Чебоксары</option>
                <option value="309">Челябинск</option>
                <option value="310">Черемхово</option>
                <option value="311">Череповец</option>
                <option value="312">Черкесск</option>
                <option value="313">Черногорск</option>
                <option value="314">Чехов</option>
                <option value="315">Чистополь</option>
                <option value="316">Чита</option>
                <option value="317">Шадринск</option>
                <option value="318">Шали</option>
                <option value="319">Шахты</option>
                <option value="320">Шуя</option>
                <option value="321">Щекино</option>
                <option value="322">Щелково</option>
                <option value="323">Электросталь</option>
                <option value="324">Элиста</option>
                <option value="325">Энгельс</option>
                <option value="326">Южно-Сахалинск</option>
                <option value="327">Юрга</option>
                <option value="328">Якутск</option>
                <option value="329">Ялта</option>
                <option value="330">Ярославль</option>
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
                        <input type="text" class="inpInfo" placeholder="Трек номер по Китаю" name="fromQID">
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