<?php
class database{
    private $hostname = "localhost";
    private $dbName = "seventeen_formations";
    private $username = "root";
    private $password = "";

    function get_data()
    {
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbName);
    }

    public function test(){
        echo "test";
    }
}