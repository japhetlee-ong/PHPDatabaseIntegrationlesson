<?php
$servername = "localhost";
$username = "testuser";
$password = "Today@123";

/* MySQLi Object oriented
//Create connection
$dbCon = new mysqli($servername,$username,$password);

//Check connection
if($dbCon->connect_error){
    die("Connection failed: ". $dbCon->connect_error);
}

$query = "CREATE DATABASE fromphpdb";
if($dbCon->query($query) === TRUE){
    echo "Database created successfully";
}else{
    echo "Error creating database: ".$dbCon->error;
}
$dbCon->close();
*/

/* MySQLi Procedural
//Create Connection
$dbCon = mysqli_connect($servername,$username,$password);

//Check Connection
if(!$dbCon){
    die("Connection failed: " . mysqli_connect_error());
}

$query = "CREATE DATABASE fromphpdb";
if(mysqli_query($dbCon,$query)){
    echo "Database created successfully";
}else{
    echo "Error creating database: ". mysqli_error($dbCon);
}

mysqli_close($dbCon);
*/

/* PDO
try{
    $dbCon = new PDO("mysql:host=$servername;dbname=complexquerysample",$username,$password);
    $dbCon = new PDO("mysql:host=$servername;",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "CREATE DATABASE fromphpdb";
    $dbCon->exec($query);
    echo "Database created successfully";

}catch(PDOException $ex){
    echo "Connection failed: ". $ex->getMessage();
}
$dbCon = null;
*/
