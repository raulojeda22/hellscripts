<?
include_once dirname(__FILE__).'/../../../../backend/includes/constants.php';
include_once _PROJECT_PATH_.'/backend/models/Project.class.php';
$method = $_SERVER['REQUEST_METHOD'];
switch($method){
    case 'GET':
        $data=$_GET;
        break;
    default:
        $data=json_decode($_POST['data']);
        break;
}
$project = new Project();
echo json_encode($project->$method($data));
