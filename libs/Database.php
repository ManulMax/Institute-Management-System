<?php
class Database
{

	public function __construct($host,$db,$user,$password)
	{
		$this->connection = mysqli_connect($host,$user,$password,$db) or die("DB connection failed");
		
	}

/**
* List all the rows from the given table.
*
* @param string $table Name of the table.
*
* @param string $fields Array of fields that need be retrieved (* for all).
*
* @return array Result of the query as an associative array.
*/
	public function listAll($table){
		$sql = "select * from ".$table;

        $result = mysqli_query($this->connection,$sql);

        return $result;

	}

	public function listCol($select,$table){
		$sql = "select ".$select." from ".$table;
        $result = mysqli_query($this->connection,$sql);

        return $result;

	}

	public function listCurrentSchedules($select,$from,$where){
		$sql = "select ".$select." from ".$from." where ".$where;

        $result = mysqli_query($this->connection,$sql);

        return $result;

	}

	public function getLastRow($select,$from){
		$sql = "select ".$select." from ".$from." ORDER BY id DESC LIMIT 1";

        $result = mysqli_query($this->connection,$sql);

        return $result;

	}

	public function listWhere($select,$from,$where){
	
		$sql = "select ".$select." from ".$from." where ".$where;

        $result = mysqli_query($this->connection,$sql);

        

        return $result;

	}


/**
* Insert a record to a table.
*
* @param string $table Name of the table.
*
* @param string $data Data need to be inserted to the database as an associative array.
*/
	public function insert($table,$fields,$values){

		$sql = "insert into ".$table."".$fields." values".$values;
		//$stmt = $this->prepare("INSERT INTO $table ($fieldNames) VALUES ($fieldValues)");
 
        $result = mysqli_query($this->connection,$sql);
        //mysqli_close($connection);

	}

/**
* Update a record in a table.
*
* @param string $table Name of the table.
*
* @param string $data Data need to be updated to the database as an associative array.
*
* @param string $where WHERE condition in SQL query.
*/

	public function update($table,$data,$where){
		$sql = "update ".$table." SET ".$data." where ".$where;
		$result = mysqli_query($this->connection,$sql);
	}

/**
* Delete a record from a table.
*
* @param string $table Name of the table.
*
* @param string $where WHERE condition in SQL query.
*/

	public function delete($table,$where){

		$stmt = $this->prepare("DELETE FROM $table WHERE $where");

        $stmt->execute();
	}

	
}



