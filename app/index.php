<?php

class Task{
    protected $id;
    protected $title;
    protected $description;
    protected $completed;

    public function __construct($id,$title,$description,$completed)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
    }
}

$task = new Task(1,'comprar pa','a la panaderia',0);

var_dump($task);

//  QUERY STRING //var_dump ($_GET['name']); //$name  = 'Sergi';
//API

$greeting = greet();
//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['name'] . '!';

