<?php
    function getBooks(){
        $db = mysqli_connect("localhost", "root", "password", "bookbase"); //Server host, username, password and database name credentials.
        $query = "SELECT * FROM books";
        $result = mysqli_query($db, $query);

        $books = array();

        while ($book = mysqli_fetch_array($result)) { //Fetch array to get all values in query
            array_push($books, (" Name: ". $book["book_name"] 
                               .", Price: ". $book["price"] . " DKK" //Dots for space in between
                               .", Author: ". $book["author"]
                               .", Publisher: ". $book["publisher"]
                               .", ISBN: ". $book["isbn"]
                        )); 
        }

        echo json_encode($books);
    }
    getBooks();
?>