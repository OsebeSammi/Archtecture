<?php
/**
 * Created by IntelliJ IDEA.
 * User: sammi
 * Date: 7/21/14
 * Time: 10:37 PM
 * To change this template use File | Settings | File Templates.
 */
include("html/head.html");

require_once("logic/run.php");


$run = new run();


$run->loopArray($run->getConfiguration());


include("html/foot.html");
