<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['blabla']) ){
        $filename = $_FILES['file'];
        var_dump($filename);

        $target_dir = "./upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        if(file_exists($target_file)){
            echo "Вибачте файл вже існує";
        }else
            move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
    }

    include "./index.html";
?>