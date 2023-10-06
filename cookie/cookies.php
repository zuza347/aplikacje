<?php
$cookie_name="user";
if(!isset($_COOKIE[$cookie_name])){
    echo "cookie named'".$cookie_name. "'is not set!";
}else{
    echo"cookie'". $cookie_name. "'is set<br>";
    echo "value is: ". $_COOKIE[$cookie_name];
}
?> 