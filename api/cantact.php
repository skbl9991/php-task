<?php
    // $name = "Не известно";
    // $surname = "Не известно";
    // $phone = "Не известно";
    // if(isset($_POST['name'])) $name = $_POST['name'];
    // if(isset($_POST['surname'])) $surname = $_POST['surname'];
    // if(isset($_POST['phone'])) $phone = $_POST['phone'];

    $returnurl = "";
    if(isset($_SERVER['HTTP_REFERER']))  
        $returnurl = $_SERVER['HTTP_REFERER'];

    if (isset($_POST['phone'], $_POST['phone'] , $_POST['phone'])) {
        header("Location: $returnurl", false,  200);
        exit();
    }
    //header("HTTP/1.1 200 OK");
    else {
        header("HTTP/1.1 400 Bad Request");
        exit();
    }
        
    // echo "Ваше Имя: $name  <br> Ваша Фамилия: $surname <br> Ваш телефон: $phone" ;
?>