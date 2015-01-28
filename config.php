// connexion mysql
	try {
		$db = new mysqli( 'localhost', 'root', 'root', 'CMS' );
	} catch (mysqli_sql_exception $e) {
		die('Probleme de connexion');
	}
