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

//PREPARE AND BIND
$statement = $dbCon->prepare("INSERT INTO tbl_students (first_name, last_name, grade) VALUES(?,?,?)");
$statement->bind_param("ssd",$firstName, $lastName, $grade);

$firstName = "Jericho";
$lastName = "Diaz";
$grade = 89.78;
$statement->execute();

echo "New record has been added";

$statement->close();
$dbCon->close();
*/


/*METHOD 1 BIND PARAM METHOD
try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $dbCon->prepare("INSERT INTO tbl_students(first_name, last_name, grade) 
                                        VALUES(:firstName, :lastName, :grade)");
    $statement->bindParam(':firstName', $firstName);
    $statement->bindParam(':lastName', $lastName);
    $statement->bindParam(':grade', $grade);

    $firstName = "Jericho";
    $lastName = "Diaz";
    $grade = 89.78;
    $statement->execute();
    echo "New record has been added";

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;
*/

/*METHOD 2 Basic Prepared Statement
try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $dbCon->prepare("INSERT INTO tbl_students(first_name, last_name, grade) 
                                        VALUES(?,?,?)");
    $statement->execute(['Jericho', 'Diaz', 99.99]);
    echo "New record has been added";

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;
*/

/*METHOD 3 Named Placeholders
try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $dbCon->prepare("INSERT INTO tbl_students(first_name, last_name, grade) 
                                        VALUES(:firstName, :lastName, :grade)");

    $statement->execute([
        ':firstName' => 'Jericho',
        ':lastName' => 'Diaz',
        ':grade'=> 85.45
    ]);
    echo "New record has been added";

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;
*/

//METHOD 4 Bind Value
try{
    $dbCon = new PDO("mysql:host=$servername;dbname=$dbName",$username,$password);
//    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $dbCon->prepare("INSERT INTO tbl_students(first_name, last_name, grade) 
                                        VALUES(?,?,?)");

    $statement->bindValue(1,'Jericho');
    $statement->bindValue(2,'Diaz');
    $statement->bindValue(3, 96.68);
    $statement->execute();
    echo "New record has been added";

}catch(PDOException $ex){
    echo $ex->getMessage();
}
$dbCon = null;