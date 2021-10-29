<?php

require 'app/helpers.php';
require 'app/Task.php';

//$task = new Task(1,'comprar pa','a la panaderia',0);
//var_dump($task);

//  QUERY STRING //var_dump ($_GET['name']); //$name  = 'Sergi';
//API

$user = 'debian-sys-maint';
$pass = '0jqqUcbvi2x4JwUb';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs',$user,$pass);

}catch (\Exception $e){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh -> prepare('SELECT * FROM tasks;');
$statement->execute();


//Fetch all tasks
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();

