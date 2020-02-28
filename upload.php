<?php

    $files = $_FILES['files'];
    $fileNames = array();
    $fileTypes = array();
    $fileErrors = array();
    $fileTmpNames = array();
    $fileSizes = array();
    
    
    // assigning datas in their arrays
    foreach($files['name'] as $position => $fileName){
        $fileNames[$position] = $fileName;
        $fileTypes[$position] = $files['type'][$position];
        $fileErrors[$position] = $files['error'][$position];
        $fileTmpNames[$position] = $files['tmp_name'][$position];
        $fileSizes[$position] = $files['size'][$position];
    }

    /* echo "<pre>",print_r($fileNames),"<pre>";
    echo "<pre>",print_r($fileTypes),"<pre>";
    echo "<pre>",print_r($fileErrors),"<pre>";
    echo "<pre>",print_r($fileTmpNames),"<pre>";
    echo "<pre>",print_r($fileSizes),"<pre>"; */

?>