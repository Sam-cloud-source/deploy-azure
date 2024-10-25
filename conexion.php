<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:dbguir.database.windows.net,1433; Database = Senati-db", "samge", "hol@1234");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "samge", "pwd" => "hol@1234", "Database" => "Senati-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dbguir.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>