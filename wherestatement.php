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

$query = "SELECT student_id, first_name, last_name, grade FROM tbl_students WHERE first_name = 'Jericho'";
$result = $dbCon->query($query);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "student_id: " . $row["student_id"]. " - Name: " . $row["first_name"]." " . $row["last_name"]. "\n";
    }
}else{
    echo "Return zero results";
}

$dbCon->close();
*/

try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT student_id, first_name, last_name, grade 
                FROM tbl_students
                WHERE first_name = 'Jericho'";

    $result = $dbCon->query($query, PDO::FETCH_ASSOC)->fetchAll();
    foreach ($result as $row){
        echo "student_id: " . $row["student_id"]. " - Name: " . $row["first_name"]." " . $row["last_name"]. "\n";
    }

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;