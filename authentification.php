<?php


if (isset($_POST['login']) ) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === 'admin' && $password === 'admin') {
        echo"vous etes conecte";
    } else {
        echo"login ou mot de passe incoreccte";
        header('Location: Authentification.html');
    }
} else {
    header('Location: Authentification.html');
}
?>