<?php
//DB Config Options

//Multiple DB servers can be used for read & write queries.
//To use multiple servers, hostname, port, username, password, database and persistent must be arrays.
//The first value in the arrays will be the write server; the read server is randomly chosen
	
return [
    'driver' => 'mysql',        //The db driver. Supported drivers: pdo
	'hostname' => 'localhost',  //The db hostname. String or array
	'port' => '3306',			//The db port. String or array
	'username' => '',       	//The db username. String or array
	'password' => '',			//The db password. String or array
	'name' => '',				//The db name. String or array
	'persistent' => false,      // If true, the db connection will be persistent. Change it only if you know what you're doing. String or array
	'charset' => 'utf8mb4',     //The db charset
];