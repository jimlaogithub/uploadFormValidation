<?php
    // validates the data type of the file
    function checkType($type){

        $allowed = array('jpg', 'jpeg', 'png');
        $fileExt = explode('/', $type);
        $fileExt = strtolower(end($fileExt));
        return in_array($fileExt, $allowed) ? true : false ;

    }

    function checkSize($size){
        return ($size <= 1000000) ? true : false;
    }

    function checkIfFileExist($file){
        return (!file_exists($file)) ? true : false;
    }

    function moveFile($file,$targetDir){
        return  move_uploaded_file($file,$targetDir);
    }
?>