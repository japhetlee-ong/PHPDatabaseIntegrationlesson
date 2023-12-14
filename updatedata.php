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

$query = "UPDATE tbl_students SET grade=98 WHERE student_id = 1";

if($dbCon->query($query) === TRUE){
    echo "Record has been updated";
}else{
    echo "Error updating record: " . $dbCon->error;
}

$dbCon->close();
*/

/* PDO
try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "UPDATE tbl_students SET grade=69 WHERE student_id = 1";

    $result = $dbCon->query($query);
    echo $result->rowCount() . " records Updated successfully";

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;
*/
