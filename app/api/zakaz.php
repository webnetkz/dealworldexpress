<?php

require_once '../libs/debug.php';

session_start();

// Если кнопка запроса нажата
if( !empty($_POST['sendZakaz']) ) {

        // From data inputs
        $fromCompany = htmlspecialchars($_POST['fromCompany']);
        $fromCompany = trim($fromCompany);

        $fromFIO = htmlspecialchars($_POST['fromFIO']);
        $fromFIO = trim($fromFIO);

        $fromCity = htmlspecialchars($_POST['fromCity']);
        $fromCity = trim($fromCity);

        $fromAdres = htmlspecialchars($_POST['fromAdres']);
        $fromAdres = trim($fromAdres);

        $fromPhone = htmlspecialchars($_POST['fromPhone']);
        $fromPhone = trim($fromPhone);

        $fromDate = htmlspecialchars($_POST['fromDate']);
        $fromDate = trim($fromDate);

        // To data inputs
        $toCompany = htmlspecialchars($_POST['toCompany']);
        $toCompany = trim($toCompany);

        $toFIO = htmlspecialchars($_POST['toFIO']);
        $toFIO = trim($toFIO);

        $toCity = htmlspecialchars($_POST['toCity']);
        $toCity = trim($toCity);

        $toAdres = htmlspecialchars($_POST['toAdres']);
        $toAdres = trim($toAdres);

        $toPhone = htmlspecialchars($_POST['toPhone']);
        $toPhone = trim($toPhone);

        $toIndex = htmlspecialchars($_POST['toIndex']);
        $toIndex = trim($toIndex);

        $toMass = htmlspecialchars($_POST['toMass']);
        $toMass = trim($toMass);

        $toPrice = htmlspecialchars($_POST['toPrice']);
        $toPrice = trim($toPrice);

        $toItems = htmlspecialchars($_POST['toItems']);
        $toItems = trim($toItems);

        $toToItems = htmlspecialchars($_POST['toToItems']);
        $toToItems = trim($toToItems);
}

// Настройка запроса на сервер
$url = curl_init('https://home.courierexe.ru/api/');
curl_setopt($url, CURLOPT_POST, 1);
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);

// Генерация XML запроса на сервер
$request = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<neworder newfolder="YES">
 <auth extra="290" login="fizz" pass="fiz123fiz"></auth>
 <order orderno="">
   <barcode></barcode>
   <sender>
     <company>$fromCompany</company>
     <person>$fromFIO</person>
     <phone>$fromPhone</phone>
     <town>$fromCity</town>
     <address>$fromAdres</address>
     <date>$fromDate</date>
     <time_min></time_min>
     <time_max></time_max>
   </sender>
   <receiver>
     <company>$toCompany</company>
     <person>$toFIO</person>
     <phone>$toPhone</phone>
     <zipcode>$toIndex</zipcode>
     <town regioncode="" country="">$toCity</town>
     <address>$toAdres</address>
     <pvz></pvz>
     <inn></inn>
     <date></date>
     <time_min></time_min>
     <time_max></time_max>
     <coords lat="" lon=""></coords>
   </receiver>
   <return>NO</return>
   <weight>$toMass</weight>
   <return_weight>$toMass</return_weight>
   <quantity>$toItems</quantity>
   <paytype>CASH</paytype>
   <service>2</service>
   <return_service>1</return_service>
   <type>3</type>
   <return_type>3</return_type>
   <courier></courier>
   <price></price>
   <deliveryprice></deliveryprice>
   <inshprice>$toPrice</inshprice>
   <receiverpays>NO</receiverpays>
   <enclosure>$toToItems</enclosure>
   <instruction>Проверить при покупателе, подписать акт</instruction>
   <department>Отдел</department>
   <pickup>NO</pickup>
   <acceptpartially>NO</acceptpartially>
   <costcode></costcode>

 </order>
</neworder>
XML;

// Настройка заголовков и отправка сообщения
curl_setopt($url, CURLOPT_HTTPHEADER, 
        array('Content-Type: text/xml; charset=utf-8', 
              'Content-Length: '.strlen($request)));

curl_setopt($url, CURLOPT_POSTFIELDS, $request);

// Получение ответа в виде XML
$response = curl_exec($url);

//$xml = simplexml_load_string($response);
/*if(!empty($xml->order)) {
    $_SESSION['tracking'] = (string)$xml->order['orderno'];
    $_SESSION['datefrom'] = (string)$xml->order->sender->date;
    $_SESSION['townfrom'] = (string)$xml->order->sender->town;
    $_SESSION['dateto'] = (string)$xml->order->receiver->town;
    $_SESSION['townto'] = (string)$xml->order->receiver->town;
    $_SESSION['mass'] = (string)$xml->order->weight;
    $_SESSION['mest'] = (string)$xml->order->quantity;
    $_SESSION['status'] = (string)$xml->order->status;
}
*/
header('Location: ../../index');
// Завершения соединения через CURL
curl_close($url);

