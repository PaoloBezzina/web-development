<?php
    //load our autoloader
    require_once __DIR__.'/autoload.php';

    //twig tenmplate loaction
    $loader = new Twig_Loader_Filesytem(__DIR__,'/templates');

    //Instantiates twig
    $twig = new Twig_Environment($loader);
