<?php
class verurl{
    public function trocarUrl($url){
        if(empty($url)){
            $url = "views/login.php";
        }else{
            $url = "views/$url.php";
        }
        include_once($url);
    }
}
?>
