<?php
class Database
{

	public function __construct($host,$db,$user,$password)
	{
		$this->connection = mysqli_connect($host,$user,$password,$db) or die("DB connection failed");
		
	}


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


	public function insert($table,$fields,$values){

		$sql = "insert into ".$table."".$fields." values".$values;
		//$stmt = $this->prepare("INSERT INTO $table ($fieldNames) VALUES ($fieldValues)");
 
        $result = mysqli_query($this->connection,$sql);
        //mysqli_close($connection);
        return $result;
	}



	public function update($table,$data,$where){
		$sql = "update ".$table." SET ".$data." where ".$where;
		$result = mysqli_query($this->connection,$sql);
		return $result;
	}


	
}



