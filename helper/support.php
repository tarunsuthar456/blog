<?php
function setString(string $atr){
    return ucwords(strtolower($atr));
}

function enc_url($url){
    return urlencode(base64_encode($url));
}


function dec_url($url){
    return base64_decode (urldecode($url));
}

function redirect($path){
    str_replace('.','/',$path);
    header("Location:".ROOT.$path);
}
?>