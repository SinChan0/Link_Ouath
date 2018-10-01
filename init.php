<?php
session_start();
$clint_id = "77xdoy7gvjp8on";
$clint_id = "xYHf5XjlB10HpwYa";
$redirect_uri = "https://sinchan0.github.io/Link_Ouath/";
$csrf_token = random_int(11111111,99999999999);
$scope = "r_basicprofile%20r_emailaddress";

function getCallback()
{
    $clint_id = "77xdoy7gvjp8on";
    $clint_id = "xYHf5XjlB10HpwYa";
    $redirect_uri = "https://sinchan0.github.io/Link_Ouath/";
    $csrf_token = random_int(11111111,99999999999);
    $scope = "r_basicprofile%20r_emailaddress";

    if (isset($_REQUEST['code'])){
        $code = $_REQUEST['code'];
        $url = "https://www.linkedin.com/oauth/v2/accessToken";
        
    }
}