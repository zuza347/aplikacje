<?php
$cookie_name="promocja";
$cookie_value="wycieczka";
setcookie($cookie_name,$cookie_value,time()+(48*60*60));


if(!isset($_COOKIE[$cookie_name])){
    echo "cookie named'".$cookie_name. "'is not set!<br>";
}
else{
    echo"cookie' ". $cookie_name. "' is set<br>";
}


    setcookie($cookie_name,"",time()-3600);


if(!isset($_COOKIE[$cookie_name])){
    echo "cookie named'".$cookie_name. "'is not set! <br>";
}
else{
    echo"cookie' ". $cookie_name. "' is set<br>";
}
?>