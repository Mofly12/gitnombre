<?php
    if(isset($_SERVER['REMOTE_ADDR']) && ($_SERVER['REMOTE_ADDR'] !== "127.0.0.1")){
        echo "entre";
    }else{
        die("no entre");
    }
?>
