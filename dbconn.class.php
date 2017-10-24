<?php
	/*  
		Class Name: DBConn;
		Author: Phil Wright
		URL: http://www.touchopia.com
        Date: 8/15/2009
   */

    include_once("config.php");
    
	class DBConn  {
		public  $db=null;
		public  $rowCount;
		public $error;

		/* Constructor */
		public function __construct()  {
			if (!$this->db ) $this->db = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
			if (!$this->db) $this->sqlError("Database Connection Error");
			@mysql_select_db(DB_NAME, $this->db);
		}

        public function __destruct() {
            if($this->db) @mysql_close($this->db);
        }

		/* Do a query and get return records as an object or array. */
		public function query($sql)  {
		    if(DEBUG) {
		        print_r($sql);
		        echo "\n";
		    }
		    
		    $rows = array();
            
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		    /* $result = mysql_query($sql, $this->db); */

			 if ( !$result ) trigger_error ("MySQL error: ".mysql_error(), E_USER_ERROR);  // throw a user error on a bad query.  A live server shouldn't show these kinds of errors


		    if(!$result) return $rows; // empty results
		    
		    while($row = @mysql_fetch_object($result))
		        $rows[] = $row;
		        
		    return $rows;
		}
		
		public function insertOrUpdateQuery($sql)  {		    
		    if(DEBUG) {
		        print_r($sql);
		        echo "\n";
		    }
		    
		    $result = mysql_query($sql, $this->db);
		
		    if(!$result) return -1;
		    return mysql_affected_rows($this->db);
		}

		public function getLastInsertId() {
			return mysql_insert_id();
		}
		
		public function sqlError($sql) {
            die("Error Occurred: <br>$sql<br>" . mysql_error() . "<br>");
        }
	}
?>
