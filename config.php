<?php

class config
{
    public $configArray = array
    (
        'header' => '/header/header.html',
        'content' => array
         (
            'menu' => '/content/menu.html',// this can be an array if nesting applies

            'advert_top' => '/content/advert_top.html',

            'left_column' => '/content/left_column.html',

            'right_column' => array
            (
                'default' => '/content/right_column.html',
                'advert_right' => '/content/advert_right.html',
            ),

            'advert_bottom' => '/content/advert_bottom.html',
         ),
        'footer' => '/footer/footer.html'
    );

    function __construct()
    {

    }

    /**
     * @return array
     */
    public function getConfigArray()
    {
        return $this->configArray;
    }


}


