<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-page</title>
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
    </style>
</head>

<body>
    <h2>Create new student account</h2>
    <a href="/edit">Edit</a>
    <a href="/delete">Delete</a><br><br>
    <a href="/">Home</a><br><br>

    <form action="/create" method="post" autocomplete="off">
        <input type="text" id="studentname" name="sname" value="Ragul" placeholder="Student name" /><br><br>
        <input type="number" id="phone" name="phone" value="9089987865" placeholder="Phone number" /><br><br>
        <select name="course" name="course" id="course">
            <option value="Select_Course">B.sc - Chemistry</option>
            <option value="chem">Chemical engineering</option>
            <option value="mech">Mechanical engineering</option>
            <option value="civil">Civil engineering</option>
            <option value="cs">Computer science engineering</option>
        </select>
        <br><br>
        <!-- <input type="select" id="course" placeholder="course" /><br><br> -->
        <input type="submit" id="submit" name="submit" value="Submit" />
    </form>
</body>

</html>

<!-- <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);


if (isset($_POST['submit'])) {
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }
    $id = $_POST['id'];
    $sname = $_POST['sname'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO `students` VALUES
	('$id', '$sname', '$phone','$course')";

    if ($conn->query($sql) === TRUE) {
        echo "records inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>  -->
