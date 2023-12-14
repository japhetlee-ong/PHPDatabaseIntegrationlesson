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
values ('Japhet','Ong',76.6);";
$query .= "INSERT INTO tbl_students(first_name, last_name, grade)
values ('John','Jones',97.80);";
$query .= "INSERT INTO tbl_students(first_name, last_name, grade)
values ('Jane','Doe',90.20)";

if($dbCon->multi_query($query) === TRUE){
    echo "New records has been added";
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
values ('Japhet','Ong',76.6);";
$query .= "INSERT INTO tbl_students(first_name, last_name, grade)
values ('John','Jones',97.80);";
$query .= "INSERT INTO tbl_students(first_name, last_name, grade)
values ('Jane','Doe',90.20)";

if(mysqli_multi_query($dbCon,$query)){
    echo "New records created successfully";
}else{
    echo "Error: " .$query. "<br>" . mysqli_error($dbCon);
}
*/

try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $dbCon->beginTransaction();

    $query1 = "INSERT INTO tbl_students(first_name, last_name, grade)
            VALUES ('Japhet','Ong',76.6)";
    $query2 = "INSERT INTO tbl_students(first_name, last_name, grade)
            VALUES ('John','Jones',97.80)";
    $query3 = "INSERT INTO tbl_students(first_name, last_name, grade)
            VALUES ('Jane','Doe',90.20)";

    $dbCon->exec($query1);
    $dbCon->exec($query2);
    $dbCon->exec($query3);

    $dbCon->commit();
    echo "New records created successfully";

//    $last_id = $conn->lastInsertId();
//    echo "New record created successfully. Last inserted ID is: " . $last_id;

}catch(PDOException $ex){
    $dbCon->rollBack();
    echo $ex->getMessage();
}
$dbCon = null;