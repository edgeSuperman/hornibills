<?php

$users = array(
    'w' => 'qianrushi.org_admin',
    'r' => 'qianrushi.org_client'
);

if (!in_array($_SERVER['PHP_AUTH_USER'], $users) || $_SERVER['PHP_AUTH_PW'] != 'qianrushi.org') {
    header('WWW-Authenticate: Basic Realm="Secret Stash"');
    header('HTTP/1.0 401 Unauthorized');
    header('Content-Type:text/html; charset=utf-8');
    print('必须输入密码才能查看!');
    exit;
}
function authW() {
    global $users;
    if (!strstr(array_search($_SERVER['PHP_AUTH_USER'], $users), 'w')) {
        exit;
    }
}

?>
