<?PHP

    include_once('DBCRUD-CLASS.php');
	include_once('DBCON-CLASS.php');
	$CON = new DBconnect;
	$CON->DBCON();
	
	$sectestinsert = new DBCR;	
	$DBCR->insert('test','1000','2014-01-01');
	
	echo "Just something";
	
	


?>