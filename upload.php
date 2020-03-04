<?php
    include_once('validation.php'); 
    $files = $_FILES['files'];

    
    foreach($files['name'] as $position => $fileName){
        // assigning datas in their arrays
        $fileNames[$position] = $fileName;
        $fileTypes[$position] = $files['type'][$position];
        $fileErrors[$position] = $files['error'][$position];
        $fileTmpNames[$position] = $files['tmp_name'][$position];
        $fileSizes[$position] = $files['size'][$position];
        //validating each file
        if(checkType($fileTypes[$position])){
            if(checkSize($fileSizes[$position])){

            }else{
                echo "[{$fileNames[$position]}] file To Large <br>";
            }
        }else{
            echo "[{$fileNames[$position]}] this file type is not allowed <br>";
        }
    }

    

    /* echo "<pre>",print_r($fileNames),"<pre>";
    echo "<pre>",print_r($fileTypes),"<pre>";
    echo "<pre>",print_r($fileErrors),"<pre>";
    echo "<pre>",print_r($fileTmpNames),"<pre>";
    echo "<pre>",print_r($fileSizes),"<pre>"; */


    

?>