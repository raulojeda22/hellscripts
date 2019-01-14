<?
include_once _PROJECT_PATH_.'/backend/models/ControllerCore.class.php';
class ModelController extends ControllerCore{

    public function GET($data){
        $query=$this->buildGetQuery($data);
        error_log($query);
        return $this->runQuery($query)->fetch_object();
    }

    public function POST($data){
        error_log(print_r('hola',1));
        error_log(print_r($data,1));
        //if ($this->GET($data[])==""){ //No se exàctament que tornarà una query fallida així que podria no funcionar
            $query=$this->buildPostQuery($data);
            return $this->runQuery($query);
        //} else {
            return null;
        //}
    }
    
    public function PUT($data){
        if ($this->GET($data[0])!=""){ //No se exàctament que tornarà una query fallida així que podria no funcionar
            $query=$this->buildPutQuery($data);
            return $this->runQuery($query);
        } else {
            return null;
        }
        
    }
    
    public function DELETE($data){
        $query=$this->buildDeleteQuery($data);        
        return $this->runQuery($query);
    }
}