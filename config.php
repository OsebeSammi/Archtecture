<?php

class config
{
    public $config = array
    (
        'header' => '\html\header\header.html',
         'content' => array
         (
            'advert_bottom' => '\html\content\advert_bottom',
            'advert_top' => '\html\content\advert_top',
            'left_column' => '\html\content\left_column',
            'menu' => '\html\content\menu',// this can be an array if nesting applies
            'right_column' => array
            (
                'default' => '\html\content\right_column',
                'advert_right' => '\html\content\advert_right',
            )
         ),
        'footer' => '\html\footer\footer.html'
    );

    function __construct()
    {

    }


}


