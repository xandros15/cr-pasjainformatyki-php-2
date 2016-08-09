<?php
/**
 * Created by PhpStorm.
 * User: xandros15
 * Date: 2016-08-09
 * Time: 18:24
 */
/** @var $loginPath string */
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>

Tylko martwi ujrzeli koniec wojny - Platon<br/><br/>

<form action="<?= $loginPath ?>" method="post">

    Login: <br/> <input type="text" name="login"/> <br/>
    Hasło: <br/> <input type="password" name="haslo"/> <br/><br/>
    <input type="submit" value="Zaloguj się"/>

</form>

<?= isset($_SESSION['blad']) ? $_SESSION['blad'] : ''; ?>

</body>
</html>
