<?php
class Database
{

//internal info
var $record = array();

var $error = "";
var $errno = 0;

//table name affected by SQL query
var $field_table= "";

//number of rows affected by SQL query
var $affected_rows = 0;

var $link_id = 0;
var $query_id = 0;

	function Database()
	{

		$dbserver   = CONS_SERVERCONN; //database server
		$dbuser     = CONS_USER_NAME; //database login name
		$dbpass     = CONS_PASSWORD; //database login password
		$database 	= CONS_DATABASE; //database name

		// $dbserver   = "localhost"; //database server
		// $dbuser     = ""; //database login name
		// $dbpass     = ""; //database login password
		// $database = "dynamicemployment"; //database name

		$this->server=$dbserver;
		$this->user=$dbuser;
		$this->pass=$dbpass;
		$this->database=$database;

	}#->constructor()


	public function connect()
	{

		$this->link_id = new mysqli($this->server, $this->user, $this->pass, $this->database);

		if (!$this->link_id) {//open failed
			$this->the_error("Cannot connect to server: <b>$this->server</b>.");
		}

	}
	public function close()
	{
		if(!$this->link_id->close())
		{
			$this->the_error("Connection close failed.");
		}
	}#->close()
	// public function escapestring($string)
	// {
	// 	return mysqli_real_escape_string($this->link_id, $string);
	// }
	public function escape($string)
	{
		return $string;
	}#->escape()

	public function query($sql)
	{
		// do query
		$this->query_id = mysqli_query($this->link_id, $sql);

		if (!$this->query_id) {
			$this->the_error("<b>MySQL Query fail:</b> $sql");
		}

		$this->affected_rows = mysqli_affected_rows($this->link_id);

		return $this->query_id;
	}#->query()

	public function fetch_array($query_id='')
	{
		// retrieve row
		if ($query_id!='')
		{
			$this->query_id=$query_id;
		}

		if (isset($this->query_id))
		{
			$this->record = mysqli_fetch_assoc($this->query_id);
		}
		else
		{
			$this->the_error("Invalid query_id: <b>$this->query_id</b>. Records could not be fetched.");
		}

		// unescape records
		if($this->record)
		{
			$this->record=array_map("stripslashes", $this->record);
			//foreach($this->record as $key=>$val) {
			//	$this->record[$key]=stripslashes($val);
			//}
		}
		return $this->record;
	}#->fetch_array()


	public function fetch_all_array($sql)
	{
		$query_id = $this->query($sql);
		$out = array();

		while ($row = $this->fetch_array($query_id))
		{
			$out[] = $row;
		}

		return $out;
	}#->fetch_all_array()

	public function query_update($table='', $data=[], $where='')
	{
		$q="UPDATE `".$table."` SET ";

		foreach($data as $key=>$val)
		{
			if(strtolower($val)=='null') $q.= "`$key` = NULL, ";
			elseif(strtolower($val)=='now()') $q.= "`$key` = NOW(), ";
			else $q.= "`$key`='".mysqli_real_escape_string($this->link_id, $val)."', ";
		}

		$q = rtrim($q, ', ') . ' WHERE '.$where.';';
		return $this->query($q);
	}#->query_update()
	public function query_insert( $table, $data)
	{
		$q="INSERT INTO `".$table."` ";
		$v=''; $n='';

		foreach($data as $key=>$val)
		{
			$n.="`$key`, ";
			if(strtolower($val)=='null') $v.="NULL, ";
			elseif(strtolower($val)=='time()') $v.="time(), ";
			else $v.= "'".mysqli_real_escape_string($this->link_id, $val)."', ";
		}

		$q .= "(". rtrim($n, ', ') .") VALUES (". rtrim($v, ', ') .");";

		if($this->query($q)){
			//$this->free_result();
			return mysqli_insert_id($this->link_id);
		}
		else return false;

	}#->query_insert()

	public function getnumrows($table, $idname, $id)
	{
		$result = mysqli_query($this->link_id, "SELECT * FROM $table WHERE $idname = '$id'");
		$numrows = mysqli_num_rows($result);

		return $numrows;
	}


	private function the_error($msg='')
	{
		if($this->link_id==false)
		{
			$this->error=mysqli_error($this->link_id);
			$this->errno=mysqli_errno($this->link_id);
		}
		else
		{
			$this->error=mysqli_error($this->link_id);
			$this->errno=mysqli_errno($this->link_id);
		}
		?>
			<table align="center" border="1" cellspacing="0" style="background:white;color:black;width:80%;">
			<tr><th colspan=2>Database Error</th></tr>
			<tr><td align="right" valign="top">Message:</td><td><?php echo $msg; ?></td></tr>
			<?php if(strlen($this->error)>0) echo '<tr><td align="right" valign="top" nowrap>MySQL Error:</td><td>'.$this->error.'</td></tr>'; ?>
			<tr><td align="right">Date:</td><td><?php echo date("l, F j, Y \a\\t g:i:s A"); ?></td></tr>
			<tr><td align="right">Script:</td><td><a href="<?php echo @$_SERVER['REQUEST_URI']; ?>"><?php echo @$_SERVER['REQUEST_URI']; ?></a></td></tr>
			<?php if(strlen(@$_SERVER['HTTP_REFERER'])>0) echo '<tr><td align="right">Referer:</td><td><a href="'.@$_SERVER['HTTP_REFERER'].'">'.@$_SERVER['HTTP_REFERER'].'</a></td></tr>'; ?>
			</table>
		<?php
		exit();
	}#->the_error()

}