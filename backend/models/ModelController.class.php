<?
class ModelController extends ControllerCore{

    protected function GET($data){
        $query=buildGetQuery($data);
        //$sql = "SELECT * FROM usuario WHERE data='$data'";
        return runQuery($query)->fetch_object();
    }

    protected function POST($data){
        /*
        $data=$data[usuario];
        $passwd=$data[pass];
        $name=$data[nombre];
        $dni=$data[DNI];
        $sex=$data[sexo];
        $birthdate=$data[fecha_nacimiento];
        $age=$data[edad];
        $country=$data[pais];
        foreach ($data[idioma] as $indice) {
            $language=$language."$indice:";
        }
        $comment=$data[observaciones];
        foreach ($data[aficion] as $indice) {
            $hobby=$hobby."$indice:";
        }
        $sql = " INSERT INTO usuario (data, pass, name, dni, sex, birthdate, age, country, language, comment, hobby)"
            . " VALUES ('$data', '$passwd', '$name', '$dni', '$sex', '$birthdate', '$age', '$country', '$language', '$comment', '$hobby')";
        */
        $query=buildPostQuery($data);
        return runQuery($query);
    }
    
    protected function PUT($data){
        /*
        $data=$data[usuario];
        $passwd=$data[pass];
        $name=$data[nombre];
        $dni=$data[DNI];
        $sex=$data[sexo];
        $birthdate=$data[fecha_nacimiento];
        $age=$data[edad];
        $country=$data[pais];
        foreach ($data[idioma] as $indice) {
            $language=$language."$indice:";
        }
        $comment=$data[observaciones];
        foreach ($data[aficion] as $indice) {
            $hobby=$hobby."$indice:";
        }
        
        $sql = " UPDATE usuario SET pass='$passwd', name='$name', dni='$dni', sex='$sex', birthdate='$birthdate', age='$age',"
            . " country='$country', language='$language', comment='$comment', hobby='$hobby' WHERE data='$data'";
        */
        $query=buildPutQuery($data);
        return runQuery($query);
    }
    
    protected function DELETE($data){
        $query=buildDeleteQuery($data);

        //$sql = "DELETE FROM usuario WHERE data='$data'";
        
        return runQuery($query);
    }
}