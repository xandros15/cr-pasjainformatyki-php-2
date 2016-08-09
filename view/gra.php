<?php
/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-08-09
 * Time: 20:18
 */
/** @var $user StdClass */
/** @var $logoutPath string */
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>

<?php

echo "<p>Witaj " . $user->user . '! [ <a href="' . $logoutPath . '">Wyloguj się!</a> ]</p>';
echo "<p><b>Drewno</b>: " . $user->drewno;
echo " | <b>Kamień</b>: " . $user->kamien;
echo " | <b>Zboże</b>: " . $user->zboze . "</p>";

echo "<p><b>E-mail</b>: " . $user->email;
echo "<br /><b>Dni premium</b>: " . $user->dnipremium . "</p>";

?>

</body>
</html>
