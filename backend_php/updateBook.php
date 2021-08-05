<?php
    $bookName = $_POST['bookName']; //Refers to name attribute in HTML
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $isbn_number = $_POST['isbn'];
    $price = $_POST['price'];

    $db = mysqli_connect("localhost", "root", "password", "bookbase"); //Server host, username, password and database name credentials.
    $query = "UPDATE books SET bookName = $bookName, author = $author, publisher = $publisher, isbn = $isbn_number, price = $price"; //Inserting the form data into the database

    mysqli_query($db, $query); //Executing the insertion query
?>