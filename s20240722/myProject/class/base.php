<?php


class DB
{
    public $name;
    protected $table;
    protected $conn;

    public function __construct($table)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db0722";

        $this->conn = new mysqli($servername, $username, $password, $dbname);
        $this->table = $table;
        echo "Hello new $table";
    }

    public function getAll()
    {
        $sql = "SELECT * FROM students";
        $data =  $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        // dd($data);
        return $data;
    }
}





function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
