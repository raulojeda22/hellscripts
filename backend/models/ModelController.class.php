<?
class ModelController extends ControllerCore{

    protected function GET($data){
        $query=$this->buildGetQuery($data);
        return $this->runQuery($query)->fetch_object();
    }

    protected function POST($data){
        if ($this->GET($data[0])==""){ //No se exàctament que tornarà una query fallida així que podria no funcionar
            $query=$this->buildPostQuery($data);
            return $this->runQuery($query);
        } else {
            return null;
        }
    }
    
    protected function PUT($data){
        if ($this->GET($data[0])!=""){ //No se exàctament que tornarà una query fallida així que podria no funcionar
            $query=$this->buildPutQuery($data);
            return $this->runQuery($query);
        } else {
            return null;
        }
        
    }
    
    protected function DELETE($data){
        $query=$this->buildDeleteQuery($data);        
        return $this->runQuery($query);
    }
}