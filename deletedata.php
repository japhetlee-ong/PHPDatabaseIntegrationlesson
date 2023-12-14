<?php
$servername = "localhost";
$username = "testuser";
$password = "Today@123";
$dbName = "fromphpdb";

/* MySQLi Object-Oriented
$dbCon = new mysqli($servername,$username,$password,$dbName);
if($dbCon->connect_error){
    die("Connection failed: ".$dbCon->connect_error);
}

$query = "DELETE FROM tbl_students WHERE student_id = 1";

if($dbCon->query($query) === TRUE){
    echo "Record deleted successfully";
}else{
    echo "Error deleting record: " . $dbCon->error;
}

$dbCon->close();
*/


try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "DELETE FROM tbl_students WHERE student_id = 2";

    $dbCon->exec($query);
    echo "Record deleted successfully";

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;
