<?php
function remove_cookie($cookie){
    if (isset($_COOKIE[$cookie])){
        unset($cookie["cookie"]);
        setcookie($cookie, "", time() - 3600);
    }
}
?>