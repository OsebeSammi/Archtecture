<?php
/**
 * Created by IntelliJ IDEA.
 * User: sammi
 * Date: 7/21/14
 * Time: 10:37 PM
 * To change this template use File | Settings | File Templates.
 */
require_once(__DIR__."/../config.php");

class run
{
    public $files = null;

    function __construct()
    {
        $this->config = new config();
    }

    public function getConfiguration()
    {
        $theArray = $this->config->getConfigArray();
        //$this->loopArray($theArray);
        return $theArray;
    }

    public function loopArray($anArray)
    {
        if(is_array($anArray))
        {
            foreach($anArray as $key => $item)
            {
                echo "<div class='".$key."'>";
                if(!is_array($item))
                {

                    include(__DIR__."/../html".$item);

                }
                else if(is_array($item))
                {
                    $this->loopArray($item);
                }
                echo "</div>";
            }
        }
    }
}