<?php 
	session_start();
	require_once("lib/autoload.php");
	// if(file_exists(__DIR__ . "/../.env"));
	// {
	// 	$dotenv= new Dotenv\Dotenv(__DIR__ . "/../");
	// 	$dotenv->load();
	// }

	Braintree_Configuration::environment("sandbox");
	Braintree_Configuration::merchantId("8v4hpy5shps48jbf");
	Braintree_Configuration::publicKey("4jyrfpk32p4xch3q");
	Braintree_Configuration::privateKey("bcfdd57c3dedf351efb6f6b585958bb4");
 ?>