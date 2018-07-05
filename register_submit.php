<?php
    $hostname = "localhost";
    $username = "root";
    $password = "123";
    $database = "photocart";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];
    $category = $_POST['category'];
    $sql = "INSERT INTO photographers (name, email, address, contact_no, age, dob, gender, password) VALUES ('$name', '$email', '$address', '$contact_no', '$age',  '$dob', '$gender', '$pass')";
    

    if (mysqli_query($conn, $sql)) {
        	echo "registration successful";
    } else {
        	echo "Error: " . $sql . "<br/>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>


