<?php
// Database credentials are configured through environment variables on the host.
$host = getenv('DB_HOST') ?: '127.0.0.1';
$user = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$database = getenv('DB_NAME') ?: 'library';
$port = (int)(getenv('DB_PORT') ?: 3306);

mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_init();
if (!$conn || !@mysqli_real_connect($conn, $host, $user, $password, $database, $port)) {
    error_log('Database connection failed; verify DB_HOST, DB_PORT, DB_NAME, DB_USER and DB_PASSWORD.');
    http_response_code(500);
    exit('Database connection failed. Check the hosting database environment variables.');
}
mysqli_set_charset($conn, 'utf8mb4');
?>
