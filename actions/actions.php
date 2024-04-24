<?php
require_once  '../vendor/autoload.php';

//connet to MongoDB Database
$databaseConnection = new MongoDB\Client;


//connecting to specific database in mongoDB
$myDatabase = $databaseConnection->myDB;

//connecting to our mongoDB Collections
$userCollection = $myDatabase->info;

//$databaseConnection = new MongoDB\Client('mongodb://localhost:27017');


// if($userCollection){
//   echo "Collection" .$userCollection."Connected";
// }
// else{
//   echo "Failed to connect to Database/Collection";
// }

?>

