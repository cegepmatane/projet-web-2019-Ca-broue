<?php
/**
 * Created by PhpStorm.
 * User: xela
 * Date: 20/02/19
 * Time: 11:27 AM
 */

require_once (CHEMIN_CODE."/var/www/html/projet-web-2019-Ca-broue/src/microcabroue_com_commun/configuration/fr_FR/LC_MESSAGES/entete.po");
if (isset($_GET["locale"])) {
    $locale = $_GET["locale"];
}
else if (isset($_SESSION["locale"])) {
    $locale  = $_SESSION["locale"];
}
else {
    $locale = "fr_FR";
}
putenv("LANG=" . $locale);
setlocale(LC_ALL, $locale);
$domain = "example";
bindtextdomain($domain, "Locale");
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);

// _() is an alias of gettext()
echo"\n";
echo gettext("accueil");
echo"\n";
