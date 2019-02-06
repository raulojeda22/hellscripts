<?
include_once _PROJECT_PATH_.'/backend/models/Connection.class.php';
class ControllerCore{

    private function addWhereStatement($array){
        $conditions=count($array);
        $query='';
        if ($conditions>=1){
            $query = " WHERE ";
        }
        foreach ($array as $row => $value){
            $query .= $row." LIKE '".str_replace('!','%',$value)."'";
            $conditions--;
            if ($conditions>0){
                $query .= ' AND ';
            }
        }
        return $query;
    }

    protected function runQuery($query){
        $connection = Connection::connect();
        $response = mysqli_query($connection, $query);
        Connection::close($connection);
        return $response;
    }

    protected function buildGetQuery($data){
        $query = 'SELECT * FROM '.$this->tableName;
        if ($data!="" && is_array($data)){
            $query .= $this->addWhereStatement($data);
        }
        error_log($query);
        return $query;
    }
    protected function buildPostQuery($data){
        if ($data!="" && is_object($data)){
            $query = 'INSERT INTO '.$this->tableName;
            $rows = ' (';
            $values = ' VALUES (';
            foreach ($data as $row => $value){
                if ($value === end($data)) {
                    $rows .= $row.')';
                    $values .= '"'.$value.'")';
                } else {
                    $rows .= $row.', ';
                    $values .= '"'.$value.'", ';
                }
            }
            $query .= $rows.$values;
        }
        return $query;
    }
    protected function buildPutQuery($data){
        if ($data!="" && is_array($data)){
            $query = 'UPDATE '.$this->tableName.' SET ';
            foreach ($data[1] as $row => $value){
                $query .= $row.'='.$value;
                if ($value === end($data[1])) $query .= ' ';
                else $query .= ', ';
            }
            $query .= $this->addWhereStatement($data[0]);
        }
        return $query;
    }
    protected function buildDeleteQuery($data){
        $query = 'DELETE FROM '.$this->tableName;
        $query .= $this->addWhereStatement($data);
        return $query;
    }
}