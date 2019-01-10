<?
class ControllerCore{

    private function addWhereStatement($array){
        $query = "";
        foreach ($array as $row => $value){
            $query .= ' WHERE '.$row.'='.$value;
            if ($conditions>0){
                $query .= ' AND';
            }
            $conditions++;
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
        $query = 'SELECT * FROM '.$tableName;
        $conditions=0;
        if ($data!="" && is_array($data)){
            $query .= $this->addWhereStatement($data);
        }
        return $query;
    }
    protected function buildPostQuery($data){
        if ($data!="" && is_array($data)){
            $query = 'INSERT INTO '.$tableName;
            $rows = ' (';
            $values = ' VALUES (';
            foreach ($data as $row => $value){
                if ($value === end($data)) {
                    $rows .= $row.')';
                    $values .= $value.')';
                } else {
                    $rows .= $row.', ';
                    $values .= $value.', ';
                }
            }
            $query .= $rows.$value;
        }
        return $query;
    }
    protected function buildPutQuery($data){
        if ($data!="" && is_array($data)){
            $query = 'UPDATE '.$tableName.' SET ';
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
        //$sql = "DELETE FROM usuario WHERE data='$data'";
        $query = 'DELETE FROM '.$tableName;
        $query .= $this->addWhereStatement($data);
        return $query;
    }
}