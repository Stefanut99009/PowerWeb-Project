<?php



/**
 * 
 */
//blueprint
class Database
{
    private $host = "localhost"; // adresa de la site daca este hostat
    private $username = "root";
    private $pass = "";
    private $db = "powerweb";

    function connect()
    {
        $connection = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->username, $this->pass);
        return $connection;
    }

    /*function read($query)
    {
        $conn = $this->connect();
        $result = $conn->query($query);
        if (!$result) {
            
            return false;
        } else {
            //$data = array();
            //$row = $result->fetch(PDO::FETCH_ASSOC)
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
    }*/
    function read($query, $params = array())
    {
        $conn = $this->connect();
        $stmt = $conn->prepare($query);
        $stmt->execute($params);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!$result) {
            return false;
        } else {
            return $result;
        }
    }

    function save($query)
    {
        $conn = $this->connect();
        $result = $conn->query($query);
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }
}

// apelam clasa:
$DB = new Database();
