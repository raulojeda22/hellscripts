<?
class ControllerCore{
    protected function runQuery($query){
        $connection = Connection::connect();
        $response = mysqli_query($connection, $query);
        Connection::close($connection);
        return $response;
    }
    protected function buildGetQuery($data){
        
    }
    protected function buildPostQuery($data){
        
    }
    protected function buildPutQuery($data){
        
    }
    protected function buildUpdateQuery($data){
        
    }
}