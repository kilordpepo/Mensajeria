<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/db_testa.db',
	// uncomment the following lines to use a MySQL database
	
	//'connectionString' => 'mysql:host=localhost;dbname=db_testa',
	'connectionString' => 'pgsql:host=localhost;port=5432;dbname=secretaria',
	'emulatePrepare' => true,
	'username' => 'postgres',
	'password' => 'admin',
	'charset' => 'utf8',
	
);