<?php
    include_once('validation.php'); 
    $files = $_FILES['files'];
    $dir = "uploads/";

    
    foreach($files['name'] as $position => $fileName){
        //validating each file
        //echo $files['type'][$position];
        if(checkType($files['type'][$position])){
            if(checkSize($files['size'][$position])){
                $targetDir = $dir.basename($files['name'][$position]);
                if(checkIfFileExist($targetDir)){
                   if(moveFile($files['tmp_name'][$position],$targetDir))
                    echo "[{$files['name'][$position]}] succesful <br>";
                    echo '
                    <div class="col-md-3">
                        <img src="'.$dir . '/' . $files['name'][$position].'" alt="..." style="width:250px; height:auto;">
                    </div>';
                }else{
                    echo "[{$files['name'][$position]}] file exist <br>";
                }
            }else{
                echo "[{$files['name'][$position]}] file To Large <br>";
            }
        }else{
            echo "[{$files['name'][$position]}] this file type is not allowed <br>";
        }
    }



    

?>