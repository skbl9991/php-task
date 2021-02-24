<?php

    if (isset($_POST['name'], $_POST['surname'] , $_POST['phone'])) {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        $filename = "user-data.txt";
        $fh = fopen($filename, "w") or die("Unable to open file!");
        fwrite($fh, "Ваше Имя: $name  Ваша Фамилия: $surname Ваш телефон: $phone");
        fclose($fh);

        header("HTTP/1.1 200 OK");
       // exit();
    }
    //
    else {
        header("HTTP/1.1 400 Bad Request");
        //exit();
    }

    //  echo "Ваше Имя: $name  <br> Ваша Фамилия: $surname <br> Ваш телефон: $phone" ;
?>