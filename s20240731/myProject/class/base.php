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
        // echo "Hello new $table";
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
        // $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            if ($value['id'] >= 5) {
                $tmp[$key]['rank'] = 2;
            } else {
                $tmp[$key]['rank'] = 1;
            }
        }
        // dd($tmp);

        return $tmp;
    }


    public function setRank()
    {
        $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            if ($value['id'] >= 5) {
                $tmp[$key]['rank'] = 2;
            } else {
                $tmp[$key]['rank'] = 1;
            }
        }
        // dd($tmp);
        return $tmp;
    }

    // add
    public function store($data)
    {
        $data['name'] = $data['name'] . '_Hello';

        $sql = "
        INSERT INTO
            `students` (`id`, `name`, `mobile`)
        VALUES
            (NULL, '{$data['name']}', '{$data['mobile']}');
        ";
        // dd($sql);

        // Array
        // (
        //     [name] => aaa
        //     [mobile] => 123
        // )


        $this->conn->query($sql);
        header('Location: http://localhost');
        exit();
    }

    // add
    public function rollbackFun()
    {
        $sql = "TRUNCATE TABLE `db0722`.`students`";
        $this->conn->query($sql);

        $sql = "INSERT INTO
                    `students` (`id`, `name`, `mobile`)
                VALUES
                    (NULL, 'amy', '0911-111-111'),
                    (NULL, 'bob', '0922-222-222'),
                    (NULL, 'cat', '0933-333-333'),
                    (NULL, 'dog', '0944-444-444');";
        $this->conn->query($sql);
        header('Location: http://localhost');
        exit();
    }
}





function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
