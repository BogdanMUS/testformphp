<?php
    session_start();

    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['number']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_number']);



    function redirect()
    {
        header('Location: contact.php');
        exit;
    }
    $user_name = htmlspecialchars(trim($_POST['username']));
    $from = htmlspecialchars(trim($_POST['email']));
    $nomer = htmlspecialchars(trim($_POST['number']));

    $_SESSION['username'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['number'] = $nomer;

    if(strlen($user_name) <= 1){
    $_SESSION['error_username'] = "Введие корректное имя";
    redirect();
    }
    else if(strlen($from) < 5 || strpos($from, "@") == false){
    $_SESSION['error_email'] = "Вы ввели некорретный email";
    redirect();
    }
    else if(strlen($nomer) < 7){
    $_SESSION['error_number'] = "Ввведите корретно номер телефона";
    redirect();
    }

    else {
        $headers = "From: $from\r\nReaply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

        mail("musnikbogdan@yandex.ru", $message, $headers);

        $_SESSION['success_mail'] = "Вы успешно отрпавили письмо";
        redirect();
    }
    