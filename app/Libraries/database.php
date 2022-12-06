<?php
class database
{
    private $hostname = "localhost";
    private $dbName = "seventeen_formations";
    private $username = "root";
    private $password = "";

    function connect()
    {
        //create connection
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbName);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function get_data($table = false, $select = "*", $where = false, $limit = false, $order = false, $orderby = false)
    {
        $return = null;
        $conn = $this->connect();
        if ($limit != false) {
            $limit = " LIMIT " . $limit;
        } else {
            $limit = "";
        }
        if ($order != false && $orderby != false) {
            $order = " ORDER BY " . $orderby ." ". $order;
        } else {
            $order = "";
        }
        if ($where == false) {
            $sql = "SELECT " . $select . " FROM " . $table . $limit;
        } else {
            $sql = "SELECT " . $select . " FROM " . $table . " WHERE " . $where . $order . $limit;
        }
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($limit == " LIMIT 1") {
                    $return = $row;
                } else {
                    $return[] = $row;
                }
            }
        } else {
            $return = 0;
        }
        $conn->close();
        return $return;
    }

    public function insert($table = false, $data = false)
    {
        $items = null;
        $values = null;
        foreach ($data as $item => $value) {
            if ($items) {
                $items = $items . ", " . $item;
            } else {
                $items = $item;
            }
            if ($values) {
                $values = $values . ", '" . $value . "'";
            } else {
                $values = "'" . $value . "'";
            }
        }
        if ($items != null && $values != null) {
            $conn = $this->connect();
            $sql = "INSERT INTO " . $table . " (" . $items . ") VALUES (" . $values . ")";
            if ($conn->query($sql) == TRUE) {
                echo "added succesfull";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
}
 