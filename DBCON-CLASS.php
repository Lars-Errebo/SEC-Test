<?PHP

class DBconnect {
    // the construct
	function __construct() {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
	}

	// some method
	public function DBCON() {
		
		/* Login variables */

       define('DB_HOST', 'localhost');
       define('DB_USER', 'root');
       define('DB_PASSWORD', 'mr27021');
       define('DB_DATABASE', 'SEC-Test');

        /* Connect to the database */
        $db = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Connection Error: " . mysql_error());
        mysql_select_db(DB_DATABASE) or die("Error connecting to db."); 
			
	}

	// the deconstruct
	function __destruct() {
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
	}

}

?>






