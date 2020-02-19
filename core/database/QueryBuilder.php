<?php

/**
 * 
 */
class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ); // getting objects
	}
	// public function dataInsert($table)
	// {
		
		// $statement = $this->pdo->prepare("Insert into {$table} (id,description,completed) VALUES (3,'Welcome!',0)");
		
		// $statement->execute();
	// }
	public function dataDelete($table)
	{
		$statement = $this->pdo->prepare("Delete from {$table} where id=3");
		$statement->execute();
	}
	public function dataUpdate($table)
	{
		$statement = $this->pdo->prepare("Update from {$table} where id=3");
		$statement->execute();
	}
}