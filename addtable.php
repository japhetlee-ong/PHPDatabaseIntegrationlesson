<?php

$servername = "localhost";
$username = "testuser";
$password = "Today@123";
$dbName = "fromphpdb";

/* MySQLI Object-Oriented
$dbCon = new mysqli($servername,$username,$password,$dbName);
if($dbCon->connect_error){
    die("Connection failed: ".$dbCon->connect_error);
}

$query = "CREATE TABLE tbl_students (
    student_id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    grade DECIMAL(10,2) NOT NULL
)";
if($dbCon->query($query) === TRUE){
    echo "Table tbl_students has been created successfully";
}else{
    echo "Error creating table: ". $dbCon->error;
}

$dbCon->close();
*/

/* MySQLi procedural
$dbCon = mysqli_connect($servername,$username,$password,$dbName);
if(!$dbCon){
    die("Connection failed: " . mysqli_connect_error());
}

$query = "CREATE TABLE tbl_students (
    student_id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    grade DECIMAL(10,2) NOT NULL
)";

if(mysqli_query($dbCon,$query)){
    echo "Table tbl_students has been created successfully";
}else{
    echo "Error creating table: ".mysqli_error($dbCon);
}
*/

/* PDO
try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "CREATE TABLE tbl_students (
    student_id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    grade DECIMAL(10,2) NOT NULL
)";
    $dbCon->exec($query);
    echo "Table tbl_students created successfully";

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;
*/