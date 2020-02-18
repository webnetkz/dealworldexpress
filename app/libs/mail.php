<?php
// Файлы phpmailer
require '../mailer/PHPMailer.php';
require '../mailer/SMTP.php';
require '../mailer/Exception.php';
// Переменные, которые отправляет пользователь
$email = $_SESSION['email'];
$text = 'Ваш трек номер для отслеживания посылок: '. $_SESSION['t'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    //$msg = "ok";
    $mail->isSMTP();   
    $mail->SMTPKeepAlive = true;
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'ssl://smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = 'dealworldkz@gmail.com'; // Логин на почте
    $mail->Password   = 'fepipe76'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('dealworldkz@gmail.com', 'DWE'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress($email); // Ещё один, если нужен
    $mail->addAddress('dealworldkz@gmail.com'); // Ещё один, если нужен

        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'DWExpress';
        $mail->Body    = $text;
    // Проверяем отравленность сообщения
    if ($mail->send()) {
        //echo "$msg";
    } else {
    echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
