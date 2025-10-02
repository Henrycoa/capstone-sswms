<?php

class Database
{

    # Class properties
    private $DBH;

    private $db_host     = 'localhost';
    private $db_user     = 'root';
    private $db_pass     = '';
    private $db_database = 'sswms_db';
    private $port        = '3306';

    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ];


    private $result = array();
    private $connect = false;

    // __CONSTRUCT IS TO AUTO RUN THE FUNCTION WITHOUT CALLING IT , SAME IN __DESTRUCT
    public function __construct()
    {
        if (!$this->connect) {
            try {
                $this->DBH = new PDO("mysql:host=$this->db_host;dbname=$this->db_database;port=$this->port", $this->db_user, $this->db_pass, $this->options);
                $this->connect = true;
            } catch (PDOException $e) {
                array_push($this->result, $this->$e);
                return 0;
            }
        } else {
            return true;
        }
    }



    //SELECT
    public function select($table, $row = "*", $join = null, $where = null, $order = null, $limit = null, $offset = 0, $group_by = null)
    {
        if ($this->tableExists($table)) {
            

            $additional_join_query = "";
            if ($join != null) {
                $additional_join_query .= $join;
            }


            $sql = "SELECT $row FROM $table  $additional_join_query ";
            // if ($join != null) {
            //     $sql .= " JOIN $join";
            // }
            if ($where != null) {
                $sql .= " WHERE 1 $where";
            }


            if ($group_by != null) {
                $sql .= " GROUP BY $group_by";
            }

            if ($order != null) {
                $sql .= " ORDER BY $order";
            }
            if ($limit != null) {
                $sql .= " LIMIT $limit";
            }

            if ($limit != null) {
                $sql .= " OFFSET $offset";
            }

            #echo $sql;

            $query = $this->DBH->prepare($sql);
            $query->execute();

            if ($query) {
                $this->result = $query->fetchAll(PDO::FETCH_ASSOC);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    //INSERT
    public function insert($table, $params = array())
    {
        if ($this->tableExists($table)) {

            $table_column = implode(', ', array_keys($params));
            $table_value  =  implode("', '", array_values($params));

            $sql = $this->DBH->prepare("INSERT INTO $table($table_column) VALUES ('$table_value')");
            $sql->execute();
            if ($sql) {
                array_push($this->result, true);
                return true;
            } else {
                array_push($this->result, false);
                return false;
            }
        } else {
            return false;
        }
    }


    // UPDATE
    public function update($table, $params = array(), $where = null)
    {
        if ($this->tableExists($table)) {
            $arg = array();
            foreach ($params as $key => $val) {
                $arg[] = "$key = '{$val}'";
            }
            $sql = "UPDATE $table SET " . implode(', ', $arg);
            if ($where != null) {
                $sql .= " WHERE 1 AND $where";
            }

            $query = $this->DBH->prepare($sql);


            $query->execute();
            if ($query) {
                array_push($this->result, true);
                return true;
            } else {
                array_push($this->result, false);
                return false;
            }
        } else {
            return false;
        }
    }
    // DELETE
    public function delete($table, $where = null)
    {
        if ($this->tableExists($table)) {
            $sql = "DELETE FROM $table";
            if ($where != null) {
                $sql .= " WHERE $where";
            }

            $query = $this->DBH->prepare($sql);
            $query->execute();
            if ($query) {
                array_push($this->result, true);
                return true;
            } else {
                array_push($this->result, false);
                return false;
            }
        } else {
            return false;
        }
    }

    ##CHECK TABLE EXISTS
    private function tableExists($table)
    {
        // Extract only the table name in case of alias (e.g., 'users u' -> 'users')
        $tableName = strtok($table, " ");

        $sql = $this->DBH->prepare("SHOW TABLES FROM $this->db_database LIKE '{$tableName}'");
        $tableInDB = $sql->execute();

        if ($tableInDB) {
            $count_rows = $sql->rowCount();
            if ($count_rows == 1) {
                return true;
            } else {
                array_push($this->result, $tableName . " does not exist.");
                return false;
            }
        } else {
            return false;
        }
    }



    public function getLastInsertId()
    {
        return $this->DBH->lastInsertId();
    }

    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    public function __destruct()
    {
        if ($this->connect) {
            // Disconnect from DB
            $this->connect = null;
        }
    }
}
