<?
include_once _PROJECT_PATH_.'/backend/models/ControllerCore.class.php';
include_once _PROJECT_PATH_.'/backend/controllers/Authorization.class.php';
class ModelController extends ControllerCore{

    protected $authorization;

    public function __construct($token){
        $this->authorization = new Authorization($token,$this->tableName);
    }

    private function checkPrivileges($function,$data){
        if (empty($data)){ 
            $target = 'All';
        } else {
            $target = 'Mine';
        }
        if ($this->tableName=='users'){
            if (array_key_exists('id',$data)){
                $authentication = ControllerCore::getTokenByUserId($data['id']);
                if (is_object($authentication) && property_exists($authentication,'token') 
                && $authentication->token == $this->authentication->token){
                    $target = 'Mine';
                }else{
                    $target = 'All';
                }
            } else {
                $target = 'All';
            }
        } else {
            if (array_key_exists('id_user',$data)){
                $authentication = ControllerCore::getTokenByUserId($data['id_user']);
                if (is_object($authentication) && property_exists($authentication,'token') 
                && $authentication->token == $this->authentication->token){
                    $target = 'Mine';
                }else{
                    $target = 'All';
                }
            } else {
                $target = 'All';
            }
        }
        $validate='validate'.$function.''.$target;
        return $this->authorization->$validate();
    }

    public function GET($data){
        if (!$this->checkPrivileges(__FUNCTION__,$data)) return false;
        $query=$this->buildGetQuery($data);
        return $this->runQuery($query);
    }

    public function POST($data){
        if (!$this->checkPrivileges(__FUNCTION__,$data)) return false;
        $query=$this->buildPostQuery($data);
        return $this->runQuery($query);
    }
    
    public function PUT($data){
        if (!$this->checkPrivileges(__FUNCTION__,$data)) return false;
        $query=$this->buildPutQuery($data);
        return $this->runQuery($query);
    }
    
    public function DELETE($data){
        if (!$this->checkPrivileges(__FUNCTION__,$data)) return false;
        $query=$this->buildDeleteQuery($data);        
        return $this->runQuery($query);
    }

}