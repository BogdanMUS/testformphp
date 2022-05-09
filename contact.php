<?php
session_start();
$title = "Контакты";?>
<h1 class="mt-5"><?=$title?></h1>
<div><?=$_SESSION['success_mail']?></div>

<form action="check_contact.php" method="post" class="forma1">
    
<input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="Введите имя" class="form-control">
    
<div class="text_danger"><?=$_SESSION['error_username']?></div><br>
    
<input type="text" name="email" value="<?=$_SESSION['email']?>" placeholder="Введите email" class="form-control">
    
    <div class="text_danger"><?=$_SESSION['error_email']?></div><br>

    <input type="text" name="number" value="<?=$_SESSION['number']?>" placeholder="Введите телефон" class="form-control">
    
    <div class="text_danger"><?=$_SESSION['error_number']?></div><br>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>