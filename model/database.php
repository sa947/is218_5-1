<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=sa947';
        $username = 'sa947';
	    $password = 'YTdrvH89E';

	        try {
		        $db = new PDO($dsn, $username, $password);
			    } catch (PDOException $e) {
			            $error_message = $e->getMessage();
				            include('../errors/database_error.php');
					            exit();
						        }
							?>
