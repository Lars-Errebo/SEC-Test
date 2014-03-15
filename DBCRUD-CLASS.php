<?PHP

	include_once('DBCON-CLASS.php');
	$CON = new DBconnect;
	$CON->DBCON();
	
	class DBCR {
		
		function insert($table,$fields,$input) {
			$q = mysql_query("INSERT INTO SEC-TEST (Test1,Test2,Test3) VALUES('tekst','10000','2014-01-01')") or die(mysql_error());
			mysql_query($q);  
		}
    }
		
?>
