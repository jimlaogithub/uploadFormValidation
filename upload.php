<?php
    include_once('validation.php'); 
    $files = $_FILES['files'];

    
    foreach($files['name'] as $position => $fileName){
        //validating each file
        if(checkType($files['types'][$position])){
            if(checkSize($files['size'][$position])){

            }else{
                echo "[{$files['name'][$position]}] file To Large <br>";
            }
        }else{
            echo "[{$files['names'][$position]}] this file type is not allowed <br>";
        }
    }

    

    


    

?>