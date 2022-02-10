<?php

require_once 'vendor/autoload.php';
use App\Classes\series;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
}

elseif (isset($_POST['btn']))
{
    $series = new series($_POST);
    $result = $series->index();
    include "pages/home.php";
}