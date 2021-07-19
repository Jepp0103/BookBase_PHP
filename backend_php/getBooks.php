<?php
    function getBooks(){
        $db = mysqli_connect("localhost", "root", "password", "bookbase"); //Server host, username, password and database name credentials.
        $query = "SELECT * FROM books";
        $result = mysqli_query($db, $query);

        $books = array();

        while ($book = mysqli_fetch_array($result)) {
            array_push($books, $book["book_name"], $book["price"]);
        }

        echo json_encode($books);
    }
    getBooks();
?>