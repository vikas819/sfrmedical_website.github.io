<?php

// Database connection parameters
$servername = "localhost";
$database = "sfrmedical_txt";
$username = "phpmyadmin";
$password = "mynewpassword";

// $servername = "localhost";
// $database = "sfrmedical_txt";
// $username = "root";
// $password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
// $sql = "CREATE TABLE IF NOT EXISTS sfr_sajoining_master (
//     jid INT(11) AUTO_INCREMENT PRIMARY KEY,
//     joining_id varchar(20) NOT NULL,
// 	joining_fname varchar(50) NOT NULL,
// 	joining_lname varchar(50) NOT NULL,
// 	joining_email varchar(255) NOT NULL,
// 	joining_phone varchar(20) NOT NULL,
// 	joining_speciality longtext NOT NULL,
// 	joining_nationality varchar(255) NOT NULL,
// 	joining_doc varchar(50) NOT NULL,
// 	joining_msg longtext NOT NULL,
// 	joining_status int(10) NOT NULL DEFAULT 0,
// 	created_on datetime NOT NULL,
// 	status int(10) NOT NULL DEFAULT 0
// )";

$sql = "ALTER TABLE sfr_sajoining_master
    -- ADD joining_role LONGTEXT NOT NULL AFTER joining_subject,
    ADD joining_speciality_other LONGTEXT NOT NULL AFTER joining_speciality";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
