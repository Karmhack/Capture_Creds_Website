<?php
$dbhost = 'localhost';
$dbname = 'website_db';
$dbusername = 'root';
$dbpassword = 'root';

$link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
$statement = $link->prepare('INSERT INTO testable (username, password) VALUE (:fname, :sname)');

$statement->execute([
    'fname' => $_POST['username'],
    'sname' => $_POST['password']
]);

// Redirect to Google after data insertion
header('Location: https://google.com');
exit; // Terminate the script to ensure the redirection is followed
?>

