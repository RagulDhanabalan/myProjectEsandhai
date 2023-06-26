<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students data</title>
    <style>
        a {
            border: 1px solid green;
            border: none;
            outline: none;
            padding: 4px;
            background-color: tomato;
            color: #fff;
            text-decoration: none;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2>All students data</h2>
    <a href="/create">Create new student data</a>
    <a href="/edit">Edit</a>
    <a href="/delete">Delete</a><br><br>
    <a href="/">Home</a>
    <br><br>

    Showing all students data table
</body>

</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel";

// Create connection
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);


// if (isset($_POST['submit'])) {

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: "
//             . $conn->connect_error);
//     }
//     $id = $_POST['id'];
//     $sname = $_POST['sname'];
//     $phone = $_POST['phone'];
//     $course = $_POST['course'];

//     $sql = "SELECT * FROM `students`";

//     if ($conn->query($sql) === TRUE) {
//         echo "records fetched successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }
