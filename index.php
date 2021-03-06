<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbName = "sql_basics";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$errors = [];
$groups = "CREATE TABLE groups (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    location VARCHAR(40) NOT NULL,
    start_date VARCHAR(5) NOT NULL,
    max_participants VARCHAR(5) NOT NULL
    )";

$learners = "CREATE TABLE learners (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email character (30) NOT NULL,
    active VARCHAR(30) NOT NULL 
    )";

$coaches = "CREATE TABLE coaches (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL
    )";


$tables = [$groups, $learners, $coaches];


foreach($tables as $k => $sql){
    $query = @$conn->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    else
       $errors[] = "Table $k : Creation done";
}


foreach($errors as $msg) {
   echo "<br> $msg <br>";
}

























//
//$database = (object)[
//    'servername' => 'localhost',
//    'username' => 'root',
//    'password' => 'root',
//    'dbname' => 'sql_introduction',
//];
//
///**
// * @throws Exception
// */
//function createConnection($servername, $username, $pwd, $dbName): mysqli
//{
//    $conn = new mysqli($servername, $username, $pwd, $dbName);
//
//    if ($conn->connect_error) {
//        throw new Exception($conn->error);
//    }
//    return $conn;
//}
//
//try {
//    $connection = createConnection($database->servername, $database->username, $database->password, $database->dbname);
//} catch (Exception $exception) {
//    die($exception->getMessage());
//}
//
//
//function addRecordsToCoaches($connection)
//{
//    echo 'connected correctly';
//}
//
//
//addRecordsToCoaches($connection);
//
//function addRecordsToGroups($connection){
//    $sql = "
//INSERT INTO groups (name, location, start_date, max_participants)
//        VALUES ('blue_cheese', 'Gent', '2022/02/14', 5),
//               ('bilbo', 'Gent', '2022/02/14', 5)
//   ";
//
//    if ($connection->query($sql) === true)
//    {
//        echo "Records inserted successfully.";
//    }
//    else
//    {
//        echo "ERROR: Could not able to execute $sql. "
//            .$connection->error;
//    }
//
//    $connection->close();
//}
//
//addRecordsToGroups($connection);