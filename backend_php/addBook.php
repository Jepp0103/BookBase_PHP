<?php
    $bookName = $_POST['bookName']; //Refers to name attribute in HTML
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $isbn_number = $_POST['isbn'];
    $price = $_POST['price'];

    $db = mysqli_connect("localhost", "root", "password", "bookbase"); //Server host, username, password and database name credentials.
    $query = "INSERT INTO books (book_name, author, isbn, publisher, price) 
            VALUES ('$bookName', '$author', '$isbn_number', '$publisher', '$price')"; //Inserting the form data into the database

    mysqli_query($db, $query); //Executing the insertion query
    header('Location: http://localhost/BookBase_PHP/frontend/public/booksPage.php')  //go to another page on error
    
?>