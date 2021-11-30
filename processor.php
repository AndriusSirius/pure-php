<?php

$_POST['firstName'] = filter_var($_POST['firstName'], FILTER_UNSAFE_RAW);

$_POST['lastName'] = filter_var($_POST['lastName'], FILTER_UNSAFE_RAW);

$_POST['phone'] = filter_var($_POST['phone'], FILTER_UNSAFE_RAW); 

$_POST['address'] = filter_var($_POST['address'], FILTER_SANITIZE_EMAIL);


    $data = array(
      array($_POST['firstName'], $_POST['lastName'], $_POST['phone'], $_POST['address'].PHP_EOL)
    );
    $fp = fopen('dataFile.txt', 'a');
    foreach ($data as $fields) {
      fwrite($fp, implode(';',$fields)); 
    }
    fclose($fp);

    header('Location: index.php');
