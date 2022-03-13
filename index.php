<?php

$database = (object)[
    'servername' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'dbname' => 'sql_introduction',
];

/**
 * @throws Exception
 */
function createConnection($servername, $username, $pwd, $dbName): mysqli
{
    $conn = new mysqli($servername, $username, $pwd, $dbName);

    if ($conn->connect_error) {
        throw new Exception($conn->error);
    }
    return $conn;
}

try {
    $connection = createConnection($database->servername, $database->username, $database->password, $database->dbname);
} catch (Exception $exception) {
    die($exception->getMessage());
}


function addRecordsToCoaches($connection)
{
    echo 'connected correctly';
}


addRecordsToCoaches($connection);

function addRecordsToGroups($connection){
    $sql = "
INSERT INTO groups (name, location, start_date, max_participants)
        VALUES ('blue_cheese', 'Gent', '2022/02/14', 5),
               ('bilbo', 'Gent', '2022/02/14', 5)
   ";

    if ($connection->query($sql) === true)
    {
        echo "Records inserted successfully.";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. "
            .$connection->error;
    }

    $connection->close();
}

addRecordsToGroups($connection);