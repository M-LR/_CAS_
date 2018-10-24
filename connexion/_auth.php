<?php
session_start();
//*********************
//CONNEXION AVEC LE CAS
//*********************
$testing = true;

include '../connexion/phpCAS/CAS.php';
include '../connexion/parameter-cas.php';


// Enable debugging
phpCAS::setDebug();
// Initialize phpCAS
phpCAS::client(SAML_VERSION_1_1, $cas_host, 443, $cas_path);
phpCAS::setNoCasServerValidation();
phpCAS::forceAuthentication();
// Some small code triggered by the logout button
if (isset($_REQUEST['logout'])) {
    phpCAS::logoutWithUrl($RACINE_URL);
}
$casLogin = phpCAS::getUser();

if ($casLogin) {
    // get cas attributes
    $casMail              = phpCAS::getAttribute('mail');
    $casDisplayName       = phpCAS::getAttribute('displayName');
    $arrCasDisplayName    = explode(' ', trim($casDisplayName), 2);
    $casName              = $arrCasDisplayName[1];
    $casFirstName         = $arrCasDisplayName[0];
    $casEntiteAffectation = phpCAS::getAttribute('supannEntiteAffectation');

    $_SESSION['mail']        = $casMail;
    $_SESSION['firstname']   = $casFirstName;
    $_SESSION['name']        = $casName;
    $_SESSION['affectation'] = $casEntiteAffectation;

    //var_dump(phpCAS);

    header("Location:../index.php");
    exit();
}
