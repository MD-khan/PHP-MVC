<?php
class QueryBuilder
{
	protected $pdo;
	function __construct( PDO $pdo )
	{
		$this->pdo = $pdo;
	}


	public function selectAll( $table )
	{
		$statement = $this->pdo->prepare("select * from {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS); 
	}


	public function insert($table, $parameters)
	{
		// $sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
		//die(var_dump(array_keys($parameters)));
		$sql = sprintf(
			'insert into %s (%s) values (%s)', 
			$table,
			implode(', ', array_keys($parameters)),
			':'.implode(', :', array_keys($parameters))
			//insert into users (name, age) values (:name, :age)
		);

		try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute($parameters);
		} catch ( Exception $e ) {
			die("Something went wrong");
		}

	}


}