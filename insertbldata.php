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

$query = "INSERT INTO tbl_students(first_name, last_name, grade)
values ('Jericho','Diaz',96.20)";

if($dbCon->query($query) === TRUE){
    echo "New record has been added";
//  FOR GETTING LAST INSERTED ID
//  $last_id = $conn->insert_id;
//  echo "New record created successfully. Last inserted ID is: " . $last_id;

}else{
    echo "Error: " .$query. "<br>" . $dbCon->error;
}

$dbCon->close();
*/

/* MySQLi Procedural
$dbCon = mysqli_connect($servername,$username,$password,$dbName);
if(!$dbCon){
    die("Connection failed: " . mysqli_connect_error());
}

$query = "INSERT INTO tbl_students(first_name, last_name, grade)
values ('Jericho','Diaz',96.20)";

if(mysqli_query($dbCon,$query)){
    echo "New record created successfully";
//  FOR GETTING LAST INSERTED ID
//  $last_id = mysqli_insert_id($conn);
//  echo "New record created successfully. Last inserted ID is: " . $last_id;
}else{
    echo "Error: " .$query. "<br>" . mysqli_error($dbCon);
}

mysqli_close($dbCon);
*/

try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "INSERT INTO tbl_students(first_name, last_name, grade)
            VALUES ('Jericho','Diaz',96.20)";
    $dbCon->exec($query);
    echo "New record created successfully";

//    $last_id = $conn->lastInsertId();
//    echo "New record created successfully. Last inserted ID is: " . $last_id;

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;


