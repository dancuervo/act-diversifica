<?php

    // convert php file into text/css
    //https://css-tricks.com/css-variables-with-php/
    $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
    $wp_load = $absolute_path[0] . 'wp-load.php';
    require_once($wp_load);
    header('Content-type: text/css');
    header('Cache-control: must-revalidate');
?>

html{
    scroll-behavior:smooth;
}

#destaque{
    background-image:   url("<?php echo get_theme_file_uri(  ) ;?>/assets-div/images/section-1.jpg");
    background-repeat:  no-repeat;
    background-size:    cover;
    height:             100vh;
    color:              white;
    text-align:         center;
}
#destaque a{
    color:white;
}

#titulo{
    padding-top:20vh;
}


#paralaxe-background{
    background-image:   url("<?php echo get_theme_file_uri() ;?>/assets-div/images/bg-section-video.jpg");
    background-repeat:  no-repeat;
    background-size:    cover;
    height:             100vh;
    text-align:         center;

}
/* main panel navigatino arrow */
#chevron{
    animation-name:pulse;
    animation-duration:5s;
    animation-iteration-count:infinite;
}

@keyframes pulse{
    0%{ color:white; }
    50%{ color:#F56F11; }
    100%{ color:white; }
}


.navbar{
    background-color:#F56F11;
}

/* floating bottom right arrow link button back to top */
#arrow-top {
	position: fixed;
	right: 5px;
	bottom: 5px;
	z-index: 1030;
}