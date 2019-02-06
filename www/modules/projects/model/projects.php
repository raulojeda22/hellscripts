<?
include_once dirname(__FILE__).'/../../../../backend/includes/constants.php';
include_once _PROJECT_PATH_.'/backend/models/Project.class.php';
$method = $_SERVER['REQUEST_METHOD'];
$project = new Project();

if ($method=='GET'||$method=='DELETE'){
    $data=$_GET;
    $results = [];
    foreach ($project->$method($data) as $row){
        $results[]=$row;
    }
} else {
    $data=json_decode($_POST['data']);
    $results = $project->$method($data);
}

echo json_encode($results);