<?php

function get_includes()
{
    return '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../apis.google.com/js/plusone.js"></script>
    <script type="text/javascript" src="highslide/highslide-with-gallery.packed.js"/></script>
    // <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    // <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    // <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    // <script src="https://cdn.amcharts.com/lib/5/geodata/canadaLow.js"></script>
    // <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="//cdn.amcharts.com/lib/4/core.js"></script>
    <script src="//cdn.amcharts.com/lib/4/maps.js"></script>
    <script src="//cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
    
    <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />';
}

//add local scripts here
function get_local_scripts()
{
    return '       
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/map.js"></script>
    <script type="text/javascript" src="js/highslide_custom.js"/></script>';
}

function get_header($title = "")
{
    echo '
    <!DOCTYPE html>
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
    echo '
        <div>
            <h2>Footer</h2>
        </div>    
        ' . get_local_scripts() . '
    </body>
    </html>';
}