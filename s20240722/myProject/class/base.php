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

    protected function getAll()
    {
        $sql = "SELECT * FROM students";
        $data =  $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        // dd($data);
        return $data;
    }

    public function getAllSetRank()
    {
        $sql = "SELECT * FROM students";
        $data =  $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            $tmp[$key]['rank'] = 1;
        }
        // dd($tmp);

        return $tmp;
    }


    public function setRank(){
        $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            $tmp[$key]['rank'] = 1;
        }
        // dd($tmp);
        return $tmp;
        
    }
}





function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
