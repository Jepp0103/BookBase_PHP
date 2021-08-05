<?php
    // $bookId = $_GET['id'];
    // $bookName = $_GET['bookName']; //Refers to name attribute in HTML
    // $author = $_GET['author'];
    // $publisher = $_GET['publisher'];
    // $isbn_number = $_GET['isbn'];
    // $price = $_GET['price'];

    $bookId = $_POST['bookId']; //Refers to name attribute in HTML
    $bookName = $_POST['bookName']; 
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $isbn_number = $_POST['isbn'];
    $price = $_POST['price'];
    // echo "step 1" . "<br>";
    $db = mysqli_connect("localhost", "root", "password", "bookbase"); //Server host, username, password and database name credentials.
    $query = "UPDATE books SET book_name = $bookName, author = $author, publisher = $publisher, isbn = $isbn_number, price = $price 
              WHERE id = $bookId"; 
    // echo $query;
    // echo "<br>" . "step 2" . "<br>";
    if(mysqli_query($db, $query)) {
        header('Location: http://localhost/BookBase_PHP/frontend/public/pages/booksPage.php')  //go to another page on error
    } 
?>