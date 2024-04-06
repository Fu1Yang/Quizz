<?php
declare(strict_types=1);
use app\quizz\model\Quizz;
/** /public/index.php */
require_once dirname(__DIR__) .'/vendor/autoload.php';
$json = file_get_contents('quizzphp.json');
$json_data = json_decode($json);
$quizz = Quizz::create($json_data );





try {
    $connexion = new PDO("mysql:host=mysql-srv;dbname=test_database",'root',"password");
    $statement=$connexion->prepare('select * from quizz;');
    $statement->execute();
    while ($row = $statement->fetch()){
        print_r($row);
    }
}
catch (PDOException $e){
    echo "error: ".$e->getMessage();
}
