<?php
 
require_once 'functions.php';
 
if (!isLoggedIn())
{
    header('Location: http://sendunlock.us/painel/logar.php');
}