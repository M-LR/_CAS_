<?php
session_start();
$_SESSION = array();
$_COOKIE  = array();

unset($_COOKIE);
unset($_SESSION);
session_unset();
session_destroy();

if (!isset($_SESSION)) {
    header('HTTP/1.1 404 Not Found');
    header('Location:https://passeport.dauphine.fr/cas/logout?service=https://www.ent.dauphine.fr/uportal');
    exit();
}
