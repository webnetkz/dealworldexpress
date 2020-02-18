<?php
  
// Модальное окно ответов
if(!empty($_SESSION['msg'])) {
    echo '<div class="modal">';
        echo '<img src="public/images/close.svg" alt="close icon" class="closeBtn" onclick="closeModal();">';
        echo '<br><br><br>';
        echo '<h2 style="text-align: center;"> '. $_SESSION['msg'] . ' </h2>';
        echo '<br><br><br>';
    echo '</div>';
    // Удаляем временные данные сообщения
    unset($_SESSION['msg']);
}