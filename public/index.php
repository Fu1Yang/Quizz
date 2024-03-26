<?php
declare(strict_types=1);
use App\MyQuizz\Quizz;
require_once dirname(__DIR__) .'/vendor/autoload.php';
$json = file_get_contents("quizzphp.json");
$json_data = json_decode($json,true);
$quizz = Quizz::create($json_data);

?>