<?
class FrontController {

    public function FrontController(){
        $this->uri=$_SERVER['REQUEST_URI'];
        if ($_SERVER['HTTP_HOST']=='localhost'){
            $this->uri=str_replace('/hellscripts/',"",$this->uri);
        }
    }

    private function getAllowedPages(){
        $allowedPages=array(
            'home'
        );
        return $allowedPages;
    }

    public function run(){
        $allowedPages=$this->getAllowedPages();
        if (in_array($this->uri,$allowedPages)){
            include_once $this->uri.".php";
        }else if($this->uri==""||$this->uri=="/"){
            include_once "home.php";
        }else {
            include_once "404.php";
        }

    }
}
?>