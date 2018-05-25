<?php

function checkAuth($login, $password) {
    require 'usersDB.php';

    foreach ($users as $user) {
        if ($user['login'] === $login && $user['password'] === $password) {
            return true;
        }
    }

    return false;

}

function getUserLogin() {
    $loginCoockie = $_COOKIE['login'] ? $_COOKIE['login'] : '';
    $passwordCoockie = $_COOKIE['password'] ? $_COOKIE['password'] : '';

    if (checkAuth($loginCoockie, $passwordCoockie)) {
        return $loginCoockie;
    }

    return null;
}