<?php

function get_includes()
{
    return '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="../apis.google.com/js/plusone.js"></script>
    <script type="text/javascript" src="highslide/highslide-with-gallery.packed.js"/></script>
    <script type="text/javascript" src="js/highslide_custom.js"/></script>
    
    <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />';
}
function get_header($title = "")
{
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $title . '</title>

    ' . get_includes() . '
</head>
<body>';
}

function get_footer()
{
    echo '<div><h2>Footer</h2></div></body></html>';
}