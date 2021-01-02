<?php

function font() {
    echo ' <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap" rel="stylesheet"> ';
}

function css() {
    echo '<link rel="stylesheet" href="https://www.hubza.co.uk/new/generic.css" />';
}

function genericmeta() {
    echo '<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">';
}

function navbar($ewa) {
    $path = "navbar.php";
    $content=includeFileContent($path);
    echo str_replace($ewa, 'enabled', $content);
}

function includeFileContent($fileName)
{
    ob_start();
    ob_implicit_flush(false);
    include($fileName);
    return ob_get_clean();
}

function footer(){
    include("footer.php");
}

function fa(){
    echo '<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>';
}

function loading(){
    echo '<div id="loading">
    <div class="eleft"></div>
    <div class="middle"></div>
    <div class="eright"></div>
</div>';

echo "<script>function onReady(callback) {
    var intervalId = window.setInterval(function() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalId);
            callback.call(this);
        }
    }, 1000);
}


onReady(function() {
    document.getElementById('loading').classList.add('finished');
});</script>";
}