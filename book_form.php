<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests']; // Corrected variable name
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Construct the SQL query
    $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) 
              VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    mysqli_query($connection, $request);
    header('location:book.php');
}
else{
    echo 'Something went wrong, please try again.';
}
?>