<?php

class Database
{
	public function __construct()
	{
		//$connection = mysqli_connect('localhost','root','isurika','vidarsha') or die("DB connection failed");
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
		$connection = mysqli_connect('localhost','root','','vidarsha');
		$sql = "select * from ".$table;

        $result = mysqli_query($connection,$sql);

        return $result;

	}


	public function listCurrentSchedules($select,$from,$where){
		$connection = mysqli_connect('localhost','root','','vidarsha');
		$sql = "select ".$select." from ".$from." where ".$where;

        $result = mysqli_query($connection,$sql);

        return $result;

	}

	public function listWhere($select,$from,$where){
		$connection = mysqli_connect('localhost','root','','vidarsha');
		$sql = "select ".$select." from ".$from." where ".$where;

        $result = mysqli_query($connection,$sql);

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
		$connection = mysqli_connect('localhost','root','','vidarsha');

		$sql = "insert into ".$table."".$fields." values".$values;
		//$stmt = $this->prepare("INSERT INTO $table ($fieldNames) VALUES ($fieldValues)");
 
        $result = mysqli_query($connection,$sql);
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

		$fieldDetails = NULL;
		foreach ($data as $key => $value) {
			$fieldDetails .= "`$key` = :$key,";
		}
		$fieldDetails = rtrim($fieldDetails,',');

		$stmt = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        
        foreach ($data as $key => $value) {
        	$stmt->bindValue(":$key",$value);
        }

        $stmt->execute();
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



