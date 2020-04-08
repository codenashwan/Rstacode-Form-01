<?php
    require_once('includes/config.php');
    $nameku = x($_POST['nameku']);
    $nameen = x($_POST['nameen']);
    $class =  x($_POST['classs']);
    
    if(empty($nameku) && empty($nameen)){
        exit("تکایە فۆڕمەکە پڕ بکەوە");
    }
    if(empty($nameku)){
        exit("ناوی چواریت بە کوردی بەتاڵە");
    }
    if(strlen($nameku) < 8){
        exit("ناوی چواری کوردیت گونجاو نییە");
    }
    if(empty($nameen)){
        exit("ناوی چواریت بە ئینگلیزی بەتاڵە");
    }
    if(strlen($nameen) < 8){
        exit("ناوی چواری بە ئنگلیزی گونجاو نییە");
    }
    if (!preg_match("/\p{Arabic}/u",$nameku)) {
       exit("ناوی چواری کوردیت گونجاو نییە");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$nameen)) {
       exit("ناوی چواری ئینگلیزی گونجاو نییە");
    }
    if(empty($class)){
        exit("تکایە کلاسەکەت دیاری بکە");
    }
    $query = mysqli_query($db ,"INSERT INTO `user`(`nameku`,`nameen`,`class`) VALUES ('$nameku','$nameen','$class')");
    if($query){
        exit("success");
    }
    ?>