<?php

function isConnected()
{
    return isset($_SESSION['user']);
}

function isAdmin()
{
    return isConnected() && $_SESSION['user']['isAdmin'] == 1;
}