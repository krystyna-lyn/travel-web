<?php
$conection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "insert into book_form(id, name, email, address, location, guests, arrivals, leaving)
    values('$name', '$email','$phone','$address','$location','$guests','$guests','$arrivals','$leaving',)";

    mysqli_query($conection, $request);

    header('location:book.php');
} else {
    echo 'Something went wrong!';
}
