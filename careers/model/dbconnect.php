<?php
class dbconnect{
    public $cnnx;

    function __construct()
    {
        $this->cnnx  = new PDO('mysql:dbname=ffd;host=localhost', 'yellowtree', 'yellow');
    }

    function kill()
    {
        $this->cnnx = null;
    }
    
}
?>