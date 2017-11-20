<?php
if (isset($_COOKIE['preferredLanguage']) 
    && ($_COOKIE['preferredLanguage'] == 'en' || $_COOKIE['preferredLanguage'] == 'pl'))
{
    $preferredLanguage = $_COOKIE['preferredLanguage'];
    header('Location: /'.$preferredLanguage.'/');
}
else
{
    $browserLanguages = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    if (strpos($browserLanguages, 'pl') !== false)
    {
        header('Location: /pl/');
    }
    else
    {
        header('Location: /en/');
    }
}
?>