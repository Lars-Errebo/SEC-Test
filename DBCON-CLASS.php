<?PHP

class DBconnect {
    // the construct
	function __construct() {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
	}

	// some method
	public function method($something) {
		echo $something; 		
	}

	// the deconstruct
	function __destruct() {
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
	}



}

?>






