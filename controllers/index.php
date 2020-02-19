<?php
$tasks = $database->dataDelete('todos');
// $tasks = $database->dataInsert('todos');
$tasks = $database->selectAll('todos');

// var_dump($tasks[0]->foobar()); // calling methods of Task class

// var_dump($tasks);

require 'views/index.view.php';