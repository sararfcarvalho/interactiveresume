<?php

class TwigExtensions
{
    public static function init() {
        add_filter('get_twig', array(__class__, 'addToTwig'));
    }

    public static function addToTwig($twig) {
        $twig->addExtension(new Twig_Extension_StringLoader());

        $filters = array();

        foreach ($filters as $filter => $isGet) {
            $twig->addFilter($filter, new Twig_Filter_Function('TwigExtensions::' . ($isGet ? 'get' : '') . ucfirst($filter)));
        }

        return $twig;
    }
}

TwigExtensions::init();
