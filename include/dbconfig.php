<?php
if (session_status() == PHP_SESSION_NONE) {
    // Configure timeout to 15 minutes
    $timeout = 2628000;
}
/**
 * Change these details according to your server
 */
$server = "localhost";
$username = "root";
$password = "root";
$database = "database";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    //Username, Password and Database
    $con = new mysqli($server, $username, $password, $database);
    $con->set_charset("utf8mb4");
} catch (Exception $e) {
    //    error_log($e->getMessage());
?>
    <script>
        window.location.href = "#";
    </script>
<?php
    //Should be a message a typical user could understand
}
