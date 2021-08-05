<?php
    function getBook(){
        // $bookId = $_GET['id'];

        $bookId = $_POST['bookId'];
        $db = mysqli_connect("localhost", "root", "password", "bookbase"); //Server host, username, password and database name credentials.
        $query = "SELECT * FROM books WHERE id = $bookId";
        $result = mysqli_query($db, $query);
        $book = mysqli_fetch_array($result); //Convert the result to be displayed.
        echo json_encode($book);
    }
    getBook();
?>