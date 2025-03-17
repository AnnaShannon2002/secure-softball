<?php

authenticateUser($_POST["user"] ?? '', $_POST["pass"] ?? '');

function authenticateUser($user, $pass) {
    if (strlen($user) > 3 && $pass === 'letmein') {
        header('Location: lions2016.php');
        exit();
    } else {
        header('Location: testinput.php');
        exit();
    }
}
